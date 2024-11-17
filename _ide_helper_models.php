<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User.
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|User findByUuid(string $uuid)
 * @method static Builder|User findOrFailByUuid(string $uuid)
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static Builder|User whereUuid($value)
 * @property-read Collection|Post[] $posts
 * @property-read int|null $posts_count
 * @property string $theme
 * @property-read mixed $avatar
 * @property-read \App\Models\LoginLog|null $last_login
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LoginLog> $logins
 * @property-read int|null $logins_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Plank\Mediable\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Plank\Mediable\MediableCollection<int, static> all($columns = ['*'])
 * @method static \Plank\Mediable\MediableCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Admin permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	final class Admin extends \Eloquent implements \Spatie\Onboard\Concerns\Onboardable {}
}

namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $title
 * @property string|null $sub_title
 * @property string|null $url
 * @property int|null $status
 * @property int|null $order_of_appearance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $img
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Plank\Mediable\Media> $media
 * @property-read int|null $media_count
 * @method static \Plank\Mediable\MediableCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Banner findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner findOrFailByUuid(string $uuid)
 * @method static \Plank\Mediable\MediableCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereOrderOfAppearance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Banner withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	final class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $uuid
 * @property string $title
 * @property string $slug
 * @property string|null $sub_title
 * @property string|null $published_by
 * @property string|null $category
 * @property string|null $content
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $img
 * @property-read mixed $short
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Plank\Mediable\Media> $media
 * @property-read int|null $media_count
 * @method static \Plank\Mediable\MediableCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Blog findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog findOrFailByUuid(string $uuid)
 * @method static \Plank\Mediable\MediableCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog wherePublishedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	final class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Career
 *
 * @property int $id
 * @property string $uuid
 * @property string $position
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $deadline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Career findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Career findOrFailByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Career newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Career newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Career query()
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereUuid($value)
 */
	final class Career extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Download
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Plank\Mediable\Media> $media
 * @property-read int|null $media_count
 * @method static \Plank\Mediable\MediableCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Download findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Download findOrFailByUuid(string $uuid)
 * @method static \Plank\Mediable\MediableCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Download newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Download newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Download query()
 * @method static \Illuminate\Database\Eloquent\Builder|Download whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Download whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Download whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Download whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Download whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Download whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Download whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Download withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Download withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Download withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Download withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	final class Download extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Email
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Email findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Email findOrFailByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Email newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Email newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Email query()
 */
	final class Email extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EmailTemplate
 *
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate findOrFailByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate query()
 */
	final class EmailTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Faq
 *
 * @property int $id
 * @property string $uuid
 * @property string $category
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Faq findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq findOrFailByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUuid($value)
 */
	final class Faq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gallery
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $group
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Plank\Mediable\Media> $media
 * @property-read int|null $media_count
 * @method static \Plank\Mediable\MediableCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery findOrFailByUuid(string $uuid)
 * @method static \Plank\Mediable\MediableCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	final class Gallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LoginLog
 *
 * @property int $id
 * @property string $uuid
 * @property string $model_id
 * @property string|null $agent
 * @property string|null $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog findOrFailByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog whereAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginLog whereUuid($value)
 */
	final class LoginLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Message
 *
 * @property-read mixed $doc
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Plank\Mediable\Media> $media
 * @property-read int|null $media_count
 * @method static \Plank\Mediable\MediableCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Message findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Message findOrFailByUuid(string $uuid)
 * @method static \Plank\Mediable\MediableCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Message withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Message withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Message withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Message withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	final class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Noticeboard
 *
 * @property int $id
 * @property string $uuid
 * @property string $title
 * @property string $slug
 * @property string|null $content
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $img
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Plank\Mediable\Media> $media
 * @property-read int|null $media_count
 * @method static \Plank\Mediable\MediableCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard findOrFailByUuid(string $uuid)
 * @method static \Plank\Mediable\MediableCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard query()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Noticeboard withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	final class Noticeboard extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Publication
 *
 * @property int $id
 * @property string $uuid
 * @property string $title
 * @property string $slug
 * @property string|null $published_by
 * @property string|null $content
 * @property int $status
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $short
 * @method static \Illuminate\Database\Eloquent\Builder|Publication findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication findOrFailByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication query()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePublishedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereUuid($value)
 */
	final class Publication extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Settings
 *
 * @property int $id
 * @property string $uuid
 * @property string $key
 * @property array|null $configs
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read mixed $value
 * @method static \Illuminate\Database\Eloquent\Builder|Settings findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings findOrFailByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereConfigs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUuid($value)
 */
	final class Settings extends \Eloquent implements \OwenIt\Auditing\Contracts\Auditable {}
}

namespace App\Models{
/**
 * App\Models\Timezone
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone findByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone findOrFailByUuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone query()
 */
	final class Timezone extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User.
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|User findByUuid(string $uuid)
 * @method static Builder|User findOrFailByUuid(string $uuid)
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static Builder|User whereUuid($value)
 * @property-read Collection|Post[] $posts
 * @property-read int|null $posts_count
 * @property string|null $service_number
 * @property string|null $prefix
 * @property string|null $first_name
 * @property string|null $other_names
 * @property \Illuminate\Support\Carbon|null $account_blocked_at
 * @property \Illuminate\Support\Carbon|null $account_verified_at
 * @property string|null $otp
 * @property |null $phone
 * @property string|null $sex
 * @property \Illuminate\Support\Carbon|null $dob
 * @property string|null $address
 * @property string|null $display_name
 * @property string $theme
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $verification_code
 * @property \Illuminate\Support\Carbon|null $verification_code_expires_at
 * @property-read mixed $avatar
 * @property-read mixed $full_name
 * @property-read mixed $identity
 * @property-read mixed $initials
 * @property-read mixed $masked_email
 * @property-read \App\Models\LoginLog|null $last_login
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LoginLog> $logins
 * @property-read int|null $logins_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Plank\Mediable\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Plank\Mediable\MediableCollection<int, static> all($columns = ['*'])
 * @method static \Plank\Mediable\MediableCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccountBlockedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccountVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOtherNames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereServiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereVerificationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereVerificationCodeExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	final class User extends \Eloquent implements \Spatie\Onboard\Concerns\Onboardable, \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

