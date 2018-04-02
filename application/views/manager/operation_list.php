[
	{
		"type": "checkbox-group",
		"label": "Fabric Development",
		"description": "Process List",
		"toggle": true,
		"name": "checkbox-group",
		"values": [
                <?php $this->manager_model->json_prcess_sequence(); 
                
			/*{
				"label": "febric development",
				"value": "option-1"
			},
			{
				"label": "febric lab dip prepration",
				"value": "option-2"
			},
			{
				"label": "fabric approval",
				"value": "option-3"
			}
		*/ ?> ]
	},
	{
		"type": "button",
		"subtype": "submit",
		"label": "Button",
		"className": "btn btn-default",
		"name": "button-1522646746101",
		"style": "default"
	}
]