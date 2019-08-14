<?php
    class Test implements Iterator,ArrayAccess {
        public $index=1;
        public $list = ['Kyiv', 'Zhytomyr', 'Cherkasy', 'Lviv'];

        public function rewind() {
            $this->index = 0; 
        }
        
        public function current() {
            return $this->list[$this->index];
        }
        
        public function key() {
            return $this->index;
        }
        
        public function next() {
            $this->index++;
        }
        
        public function valid() {
           $list = key($this->list);
            return ($list !== null && $list !== false);
        }
        public function offsetExists($index) {
             return isset($this->list[$index]);
         }
         public function offsetGet($index) {
             return $this->list[$index];
         }
        
         public function offsetSet($index,$value) {
             $this->list[$index] = $value;
         }
         public function offsetUnset($index) {
             unset($this->list[$index]);
         }
    }

    $test = new Test();
    foreach ($test->list as $key => $value) echo "$value =>$key; ";
    echo '<br />';
    $test->offsetSet(5,'Bucha');
    $test->offsetSet(4,'Sraka');
    $test->offsetUnset(4);
    echo $test->offsetGet(2);
    echo '<br />';
    foreach ($test->list as $key => $value) echo "$value =>$key; ";
    echo '<br />';
    echo $test->offsetExists(7);

//  <?php
//     class MyArray implements ArrayAccess
//     {
//         private $arr = [];
        
//         public function offsetExists($offset) {
//             return isset($this->arr[$offset]);
//         }
        
//         public function offsetGet($offset) {
//             return $this->arr[$offset];
//         }
        
//         public function offsetSet($offset, $value) {
//             $this->arr[$offset] = $value;
//         }
        
//         public function offsetUnset($offset) {
//             unset($this->arr[$offset]);
//         }
        
//     }
    
//     $a = new MyArray();
//     $a['Name'] = 'Michael';
//     $a['Age'] = 26;
//     echo $a['Name'].' - '.$a['Age'].'<br />';
//     echo isset($a['Name']).'<br />';
//     unset($a['Name']);
//     echo isset($a['Name']).'<br />';
// ?>