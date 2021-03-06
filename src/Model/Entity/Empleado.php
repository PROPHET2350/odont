<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empleado Entity
 *
 * @property int $id
 * @property string $nomb
 * @property string $apellido
 * @property string $telefono
 * @property string $mail
 */
class Empleado extends Entity
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
        'nomb' => true,
        'apellido' => true,
        'telefono' => true,
        'mail' => true,
    ];
}
