<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
/**
 * User Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $mail
 * @property string $password
 * @property int $tip_usu
 * @property string $cedula
 *
 * @property \App\Model\Entity\Agenda[] $agenda
 * @property \App\Model\Entity\Agenda1[] $agenda1
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'apellido' => true,
        'mail' => true,
        'password' => true,
        'tip_usu' => true,
        'cedula' => true,
        'agenda' => true,
        'agenda1' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
    
}
