// src/Blogger/AccountBundle/Form/Model/Registration.php
namespace Blogger\AccountBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use Blogger\AccountBundle\Entity\User;

class Registration
{
    /**
     * @Assert\Type(type="Blogger\AccountBundle\Entity\User")
     * @Assert\Valid()
     */
    protected $user;

    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }
}