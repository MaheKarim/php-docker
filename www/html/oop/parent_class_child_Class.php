    <?php


    class ParentClass {

        protected $name ;

        public function __construct($name){
            $this->name = $name;
            $this->sayHi();
        }

        public function sayHi()
        {
            echo "Hi Function {$this->name}\n";
        }
    }

    class ChildClass extends ParentClass
    {
        public function sayHi()
        {
            parent::sayHi(); // Call From Parent Class

            echo "Hi Function From ChildClass \n";
        }
    }

    $cc = new ChildClass('Mike');

