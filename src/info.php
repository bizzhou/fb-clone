<!-- author_email: Melanie Lin-->
<?php
class Info {
    private $email;
    private $education;
    private $workplace;
    private $current_city;
    private $relationship;
    private $hometown;
    private $description;   // describe who you are


    function set_email($arg) {
        $this->email = $arg;
    }
    function set_education($arg) {
        $this->education = $arg;
    }
    function set_workplace($arg) {
        $this->workplace = $arg;
    }
    function set_current_city($arg) {
        $this->current_city = $arg;
    }
    function set_relationship($arg) {
        $this->relationship = $arg;
    }
    function set_hometown($arg) {
        $this->hometown = $arg;
    }
    function set_description($arg) {
        $this->description = $arg;
    }

    function get_email() {
        return $this->email;
    }
    function get_education() {
        return $this->education;
    }
    function get_workplace() {
        return $this->workplace;
    }
    function get_current_city() {
        return $this->current_city;
    }
    function get_relationship() {
        return $this->relationship;
    }
    function get_hometown() {
        return $this->hometown;
    }
    function get_description() {
        return $this->description;
    }

}
?>
