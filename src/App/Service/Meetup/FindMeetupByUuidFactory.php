<?php
declare(strict_types=1);

namespace App\Service\Meetup;

use App\Entity\Meetup;
use Doctrine\ORM\EntityManagerInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * @codeCoverageIgnore
 */
final class FindMeetupByUuidFactory implements FactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ) : FindMeetupByUuidInterface {
        return new DoctrineFindMeetupByUuid(
            $container->get(EntityManagerInterface::class)->getRepository(Meetup::class)
        );
    }
}
