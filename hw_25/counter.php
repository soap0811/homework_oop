protected static $counter;
public $data;
	
	private function __construct() {
		var_dump(StaticTest::$counter);
	}

	public static function getInstance() {if ($this->instance != undefined){$this->instance = new Counter()}
		
	}
}

$st1 = StaticTest::getInstance();
$st1->data = 4;

$st2 = StaticTest::getInstance();
var_dump($st2->data);//должен вывести 4

$st3 = StaticTest::getInstance();
$st3->data = 8;
var_dump($st1->data);//Должно вывести 8, $st1 и $st3 - один и тот же объект 
