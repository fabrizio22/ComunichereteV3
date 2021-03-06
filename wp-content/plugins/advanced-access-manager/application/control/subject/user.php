<?php

/**
 * ======================================================================
 * LICENSE: This file is subject to the terms and conditions defined in *
 * file 'license.txt', which is part of this source code package.       *
 * ======================================================================
 */

/**
 *
 * @package AAM
 * @author Vasyl Martyniuk <support@wpaam.com>
 * @copyright Copyright C 2013 Vasyl Martyniuk
 * @license GNU General Public License {@link http://www.gnu.org/licenses/}
 */
class aam_Control_Subject_User extends aam_Control_Subject {

    /**
     * Subject UID: USER
     */
    const UID = 'user';

    /**
     * AAM Capability Key
     *
     * WordPress does not allow to have different set of capabilities for one user
     * between sites. aam_capability key stores the set of capabilities stored after
     * individual user edit and merge them with system capabilities.
     * The merging process overwrites allcaps.
     *
     * @var array
     *
     * @access private
     */
    private $_cap_key = '';

    /**
     *
     * @param type $id
     */
    public function __construct($id) {
        parent::__construct($id);

        //overwrite default set of capabilities if AAM capset is defined
        if ($this->isDefaultCapSet() === false){
            //make sure that aam_capability is actually array
            if (is_array($this->getSubject()->aam_caps)){
                $allcaps = array_merge(
                        $this->getSubject()->allcaps, $this->getSubject()->aam_caps
                );
                $this->getSubject()->allcaps = $allcaps;
            }
        }
    }

    /**
     *
     * @return type
     */
    public function delete() {
        $response = false;
        if (current_user_can('delete_users')
                                    && ($this->getId() !== get_current_user_id())) {
            $response = wp_delete_user($this->getId());
        }

        return $response;
    }

    /**
     *
     * @global type $wpdb
     * @return boolean
     */
    public function block() {
        global $wpdb;

        $response = false;
        if (current_user_can('edit_users')
                                && ($this->getId() != get_current_user_id())) {
            $status = ($this->getSubject()->user_status == 0 ? 1 : 0);
            if ($wpdb->update(
                            $wpdb->users,
                            array('user_status' => $status),
                            array('ID' => $this->getId())
                    )) {
                $this->getSubject()->user_status = $status;
                clean_user_cache($this->getSubject());
                $response = true;
            }
        }

        return $response;
    }

    /**
     * Retrieve User based on ID
     *
     * @return WP_Role|null
     *
     * @access protected
     */
    protected function retrieveSubject() {
        global $current_user;

        if ($current_user instanceof WP_User && $current_user->ID == $this->getId()) {
            $subject = $current_user;
        } else {
            $subject = new WP_User($this->getId());
        }

        //retrieve aam capabilities if are not retrieved yet
        $this->_cap_key = 'aam_capability';
        $subject->aam_caps = get_user_option($this->_cap_key, $this->getId());

        return $subject;
    }

    /**
     * Check if user has default capability set
     *
     * @return boolean
     *
     * @access public
     */
    public function isDefaultCapSet(){
        return empty($this->getSubject()->aam_caps);
    }

    /**
     *
     * @return type
     */
    public function getCapabilities() {
        return $this->getSubject()->allcaps;
    }

    /**
     *
     * @param type $capability
     * @return type
     */
    public function hasCapability($capability) {
        return user_can($this->getSubject(), $capability);
    }

    /**
     * Check if Subject has capability
     *
     * Keep compatible with WordPress core
     *
     * @param string $capability
     *
     * @return boolean
     *
     * @access public
     */
    public function addCapability($capability) {
        return $this->updateCapability($capability, true);
    }

    /**
     * Remove Capability
     *
     * @param string  $capability
     *
     * @return boolean
     *
     * @access public
     */
    public function removeCapability($capability) {
        return $this->updateCapability($capability, false);
    }

    /**
     * Reset User Capability
     *
     * @return array
     *
     * @access public
     */
    public function resetCapability(){
        return delete_user_option($this->getId(), $this->_cap_key);
    }

    /**
     * Update User's Capability Set
     *
     * @param string  $capability
     * @param boolean $grand
     *
     * @return boolean
     *
     * @access public
     */
    public function updateCapability($capability, $grand){
        //make sure that we have right array
        if (is_array($this->getSubject()->aam_caps)){
            $aam_caps = $this->getSubject()->aam_caps;
        } else {
            $aam_caps = array();
        }

        //add capability
        $aam_caps[$capability] = $grand;
        //update user data. TODO - Keep eyes on this part
        $this->getSubject()->data->aam_caps = $aam_caps;
        //save and return the result of operation
        return update_user_option($this->getId(), $this->_cap_key, $aam_caps);
    }

    /**
     *
     * @param type $value
     * @param type $object
     * @param type $object_id
     * @return type
     */
    public function updateOption($value, $object, $object_id = 0) {
        return update_user_option(
                $this->getId(), $this->getOptionName($object, $object_id), $value
        );
    }

    /**
     *
     * @param type $object
     * @param type $object_id
     * @param bool $inherit
     * 
     * @return mixed
     */
    public function readOption($object, $object_id = 0, $inherit = true) {
        $option = get_user_option(
                $this->getOptionName($object, $object_id), $this->getId()
        );
        if (empty($option) && $inherit) {
            //try to get this option from the User's Role
            $roles = $this->getSubject()->roles;
            //first user role is counted only. AAM does not support multi-roles
            $subject_role = array_shift($roles);
            //in case of multisite & current user does not belong to the site
            if ($subject_role){
                $role = new aam_Control_Subject_Role($subject_role);
                $option = $role->getObject($object, $object_id)->getOption();
            }
        }

        return $option;
    }

    /**
     *
     * @param type $object
     * @param type $object_id
     * @return type
     */
    public function deleteOption($object, $object_id = 0) {
        return delete_user_option(
            $this->getId(), $this->getOptionName($object, $object_id)
        );
    }

    /**
     *
     * @param type $object
     * @param type $object_id
     * @return type
     */
    protected function getOptionName($object, $object_id) {
        return "aam_{$object}" . ($object_id ? "_{$object_id}" : '');
    }

    /**
     * Get Subject UID
     *
     * @return string
     *
     * @access public
     */
    public function getUID() {
        return self::UID;
    }

    /**
     * Get User's Cache
     *
     * Read User's option aam_cache and return it
     *
     * @return array
     *
     * @access public
     */
    public function readCache(){
        $cache = get_user_option('aam_cache', $this->getId());
        return (is_array($cache) ? $cache : array());
    }

    /**
     * Insert or Update User's Cache
     *
     * @return boolean
     *
     * @access public
     */
    public function updateCache(){
        return update_user_option($this->getId(), 'aam_cache', $this->getObjects());
    }

    /**
     * Delete User's Cache
     *
     * @return boolean
     *
     * @access public
     */
    public function clearCache(){
        return delete_user_option($this->getId(), 'aam_cache');
    }

}