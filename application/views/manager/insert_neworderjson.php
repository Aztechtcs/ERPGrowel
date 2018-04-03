[
	{
		"type": "autocomplete",
		"required": true,
		"label": "Buyer Name",
		"description": "Name Of Buyer",
		"placeholder": "Name Of Buyer",
		"className": "form-control",
		"name": "Buyer",
		"values":  [
                <?php $this->manager_model->json_buyer(); 
			/*{
				"label": "Kokaidi",
				"value": "1"
			},
			{
				"label": "Bhartiye",
				"value": "2"
			}*/
                        ?> 
		]
	},
	{
		"type": "autocomplete",
		"required": true,
		"label": "Style Name",
		"placeholder": "Style Name",
		"className": "form-control",
		"name": "style_name",
		"values": [
                 <?php $this->manager_model->json_Styles(); 
			/*{
				"label": "Style_1",
				"value": "Style_1"
			},
			{
				"label": "style 2",
				"value": "style 2"
			},
			{
				"label": "xyz",
				"value": "xyz"
			} */ ?>
		]
	},
	{
		"type": "text",
		"required": true,
		"label": "order Number",
		"description": "Order ID/ Order Number",
		"placeholder": "Order Number",
		"name": "order_id",
		"subtype": "text",
		"className": "red form-control"
	},
	<?php /*{
		"type": "text",
                "subtype": "text",
		"required": true,
		"label": "Color",
		"placeholder": "Color",
		"name": "color",
		"className": "red form-control"
	},
	{
		"type": "number",
		"required": true,
		"label": "Total Quantity",
		"description": "Total Quantity include all size",
		"placeholder": "Total Quantity",
		"className": "form-control",
		"name": "quantity"
	},*/ ?>
	{
		"type": "button",
		"subtype": "submit",
		"label": "Button",
		"className": "btn btn-danger",
		"name": "button-1522399586131",
		"style": "danger"
	}
]