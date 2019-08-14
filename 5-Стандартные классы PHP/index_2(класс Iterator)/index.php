<?php
	class Test implements Iterator {
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
           $key = key($this->list);
            return ($key !== null && $key !== false);
        }
	}

	$test = new Test();
	foreach ($test->list as $key => $value) echo "$value =>$key; ";
    echo '<br />';
    echo $test->next();
    echo $test->current();

    // class Test
    // {
    //     public $x = 5;
    //     public $y = 8;
    //     private $z = 10;
    //     protected $pr = -5;
    // }
    
    // class MyArray implements Iterator
    // {
    //     private $arr = ['Name' => 'Michael', 'age' => '26', 'bd' => '11.07.1990'];
        
    //     public function rewind() {
    //         reset($this->arr);
    //     }
        
    //     public function current() {
    //         return current($this->arr);
    //     }
        
    //     public function key() {
    //         return key($this->arr);
    //     }
        
    //     public function next() {
    //         return next($this->arr);
    //     }
        
    //     public function valid() {
    //         $key = key($this->arr);
    //         return ($key !== null && $key !== false);
    //     }
    // }
    
    // $test = new Test();
    
    // foreach ($test as $k => $v) echo "$k = $v; ";
    // echo '<br />';
    
    // $arr = new MyArray();
    
    // foreach ($arr as $k => $v) echo "$k = $v; ";
    // echo '<br />';
    
    // $dir = new DirectoryIterator('W:\modules\conemu');
    // foreach ($dir as $file) {
    //     echo $file->getFilename();
    //     if ($file->isFile()) echo ' - '.$file->getSize().' байт';
    //     echo '<br />';
    // }
?>