<?php

class test {

	protected function configureFormFields($formMapper)
	{
		$formMapper = $formMapper ? $formMapper : 125;

		$subject = $formMapper ? $formMapper : '';
		if ($subject) {
			$selectedChoices = $subject;
		}
		else {
			$selectedChoices = $subject;
		}
        return $selectedChoices;
	}	
	
}