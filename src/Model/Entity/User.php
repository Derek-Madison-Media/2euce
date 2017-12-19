<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $image
 * @property string $facebook
 * @property string $twitter
 * @property string $thumb
 * @property string $email
 * @property string $password
 * @property int $alphanet
 * @property int $status_id
 * @property int $active_id
 * @property string $tagline
 * @property string $description
 * @property int $lock_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 *
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Active $active
 * @property \App\Model\Entity\Lock $lock
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Post[] $posts
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
        'firstName' => true,
        'lastName' => true,
        'image' => true,
        'facebook' => true,
        'twitter' => true,
        'thumb' => true,
        'email' => true,
        'password' => true,
        'alphanet' => true,
        'status_id' => true,
        'active_id' => true,
        'tagline' => true,
        'description' => true,
        'lock_id' => true,
        'created' => true,
        'updated' => true,
        'status' => true,
        'active' => true,
        'lock' => true,
        'comments' => true,
        'posts' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
