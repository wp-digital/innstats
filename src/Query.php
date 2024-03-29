<?php

namespace WPD\Statistics;

class Query {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @param string $name
	 *
	 * @return void
	 */
	public function set_name( string $name ): void {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function get_name(): string {
		return $this->name;
	}

	/**
	 * @return bool
	 */
	public function is_exists(): bool {
		return ! empty( $_GET[ $this->get_name() ] );
	}

	/**
	 * @return string|null
	 */
	public function value(): ?string {
		$name = $this->get_name();

		return $_GET[ $name ] ?? null;
	}
}
