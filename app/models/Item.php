<?php
    class Item extends DB\SQL\Mapper {

        public function __construct(DB\SQL $db) {
            parent::__construct($db,'items');
        }

        public function all() {
            $this->load();
            return $this->query;
        }

        public function add() {
            $this->copyFrom('POST');
            $this->save();
        }

        public function getById($id) {
            $this->load(array('itemId=?',$id));
            $this->copyTo('POST');
        }

        public function edit($id) {
            $this->load(array('itemId=?',$id));
            $this->copyFrom('POST');
            $this->update();
        }

        public function delete($id) {
            $this->load(array('itemId=?',$id));
            $this->erase();
        }

        public function getSpecial() {
            $this->load(
                        array('isSpecial=?', 1),
                        array('isActive=?', 1)
                    );
            return $this->query;
        }

        public function getAllByCategoryId($cafeId, $categoryId) {
            $this->load(
                    array('cafeId=?', $cafeId),
                    array('categoryId=?', $categoryId),
                    array('isActive=?', true)
                )
            ;
            return $this->query;
        }

    }
?>
