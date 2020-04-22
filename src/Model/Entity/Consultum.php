<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultum Entity
 *
 * @property int $id
 * @property int $id_usuario
 * @property int $id_empleado
 * @property string $precio
 * @property string $tratamiento
 * @property string $forma_pago
 * @property \Cake\I18n\FrozenDate $fecha
 */
class Consultum extends Entity
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
        'id_usuario' => true,
        'id_empleado' => true,
        'precio' => true,
        'tratamiento' => true,
        'forma_pago' => true,
        'fecha' => true,
    ];
}
