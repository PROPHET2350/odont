<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NotificacionEmp Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property string $descripcion
 * @property string $url
 * @property bool $visto
 */
class NotificacionEmp extends Entity
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
        'fecha' => true,
        'descripcion' => true,
        'url' => true,
        'visto' => true,
    ];
}
