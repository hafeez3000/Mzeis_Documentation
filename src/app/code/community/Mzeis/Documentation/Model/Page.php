<?php

/**
 * Documentation page model
 *
 * @method getCreatedAt()
 * @method getCreatedUser()
 * @method getName()
 * @method getUpdatedAt()
 * @method getUpdatedUser()
 * @method setCreatedAt(string $value)
 * @method setCreatedUser(string $value)
 * @method setName(string $value)
 * @method setUpdatedAt(string $value)
 * @method setUpdatedUser(string $value)
 */
class Mzeis_Documentation_Model_Page extends Mage_Core_Model_Abstract
{

    protected function _construct()
    {
        $this->_init('mzeis_documentation/page');
    }

    /**
     * Loads the page by the name.
     *
     * @param $name
     * @return Mzeis_Documentation_Model_Page
     */
    public function loadByName($name)
    {
        $this->load($name, 'name');
        return $this;
    }

    /**
     * Renames the links in all pages from the old to the new name.
     *
     * @param $oldName
     * @param $newName
     * @return Mzeis_Documentation_Model_Page
     */
    public function renameLinks($oldName, $newName)
    {
        $this->getResource()->renameLinks($oldName, $newName);
        return $this;
    }

}
