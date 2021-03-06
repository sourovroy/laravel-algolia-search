<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use Searchable;

	/**
	 * Get the index name for the model.
	 *
	 * @return string
	 */
	public function searchableAs()
	{
		return 'title';
	}

	/**
	 * Get the indexable data array for the model.
	 *
	 * @return array
	 */
	public function toSearchableArray()
	{
		$array = $this->toArray();
		return $array;
	}
}