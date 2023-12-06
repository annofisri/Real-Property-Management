<?php

class Functions
{

	public function showAlerts($alerts = [])
	{
		if (!empty($alerts)) {
			foreach ($alerts as $key => $value) {
				if ($key == 'success') {
					if (is_array($value)) {
						foreach ($value as $alert) {
							echo '<div class="alert alert-success">' . $alert . '</div>';
						}
					} else {
						echo '<div class="alert alert-success">' . $value . '</div>';
					}
				} elseif ($key == 'error') {
					if (is_array($value)) {
						foreach ($value as $alert) {
							echo '<div class="alert alert-danger">' . $alert . '</div>';
						}
					} else {
						echo '<div class="alert alert-danger">' . $value . '</div>';
					}
				}
			}
		}
	}

	public function getValue($key)
	{
		return VALUE[$key] ?? null;
	}
}
