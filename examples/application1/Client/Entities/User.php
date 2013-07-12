<?php
namespace Client\Entities;

/**
 * This class was generated by the drest-client tool, and should be treated as a
 * plain data object
 *
 * ANY ALTERATIONS WILL BE OVERWRITTEN if the classes are regenerated
 * The variables declared are exposed by the rest endpoint provided when generating
 * these classes. However depending on the operation (GET/POST/PUT etc) used some
 * of these may not be populated / operational.
 */
class User
{

    public $id = null;

    public $username = null;

    public $email_address = null;

    /**
     * @var Entities\Profile $profile
     */
    public $profile = null;

    /**
     * @var array $phone_numbers
     */
    public $phone_numbers = array();

    /**
     * @return User $instance
     */
    public static function create()
    {
        return new self();
    }

    /**
     * @param string $id
     * @return User $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $username
     * @return User $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param string $email_address
     * @return User $this
     */
    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;
        return $this;
    }

    /**
     * @param Entities\Profile $profile
     * @return User $this
     */
    public function setProfile(Profile $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @param Entities\PhoneNumber $phone_number
     * @return User $this
     */
    public function addPhoneNumber(PhoneNumber $phone_number)
    {
        $this->phone_numbers[] = $phone_number;
        return $this;
    }

    /**
     * @param array $phone_numbers
     * @return User $this
     */
    public function addPhoneNumbers(array $phone_numbers)
    {
        foreach ($phone_numbers as $phone_number) 
        {
            $this->addPhoneNumber($phone_number);
        }
        return $this;
    }


}
