<?php

class Job extends person {

    private $jobName;

    public function __construct($name, $lastName, $age, $jobName)
    {
        $this->jobName = $jobName;
        parent::__construct($name, $lastName, $age);
    }

    function setJobName($jobName){
        $this->jobName = $jobName;
    }

    public function getJobName(){
        return $this->jobName;
    }
}

class person {

    public $name;
    public $lastName;
    public $age;

    public function __construct($name, $lastName, $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function personInfo(){
        return "Hello " . $this->name . " is " . $this->lastName . " and " . $this->age;
    }


}

//$person = new person('Alex','Sosiska','31');
//echo $person->personInfo();
$person = new Job('Alex','Sosiska','31','developer');
$person->setJobName('football');
echo $person->getJobName();