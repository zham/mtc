<?php

namespace Mtc\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
//use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Response;

class UserBundle extends Bundle
{
	public function getParent()
	{
		return 'SonataUserBundle';
	}
}
