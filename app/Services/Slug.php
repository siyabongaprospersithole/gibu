<?php

namespace App\Services;

use App\user;

class Slug
{
    /**
     * @param $first_name
     * @param $last_name
     * @param int $id
     * @return string
     * @throws \Exception
     */
    public static function createSlug($first_name, $last_name)
    {
        // Normalize the first_name
        $slug = str_slug($first_name . '' . $last_name);

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = Slug::getRelatedSlugs($slug);

        // If we haven't used it before then we are all good.
        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $randSlug = uniqid();
            $newSlug = $slug . '-' . $randSlug;
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }

    protected static function getRelatedSlugs($slug, $id = 0)
    {
        return user::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
