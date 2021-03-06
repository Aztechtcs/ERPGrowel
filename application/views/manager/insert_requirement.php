[
	{
		"type": "autocomplete",
		"required": true,
		"label": "Order Number",
		"placeholder": "Enter Order Number",
		"className": "form-control",
		"name": "order_id",
		"values": [
			{
				"label": "#23078",
				"value": "1"
			},
			{
				"label": "031573",
				"value": "2"
			},
			{
				"label": "45693",
				"value": "3"
			},
			{
				"label": "01273",
				"value": "4"
			}
		]
	},
	{
		"type": "text",
		"required": true,
		"label": "Material Name",
		"placeholder": "material_name",
		"name": "material_name",
		"subtype": "text",
		"className": "red form-control"
	},
	{
		"type": "autocomplete",
		"required": true,
		"label": "Quantity Measurement<br>",
		"placeholder": "Quantity Measurement",
		"className": "form-control",
		"name": "qm",
		"values": [
			{
				"label": "Meter",
				"value": "M"
			},
			{
				"label": "KG",
				"value": "kg"
			}
		]
	},
	{
		"type": "number",
		"required": true,
		"label": "Quantity",
		"placeholder": "Quantity",
		"className": "form-control",
		"name": "quantity",
		"value": "2.2",
		"step": "2"
	},
	{
		"type": "number",
		"label": "Price",
		"placeholder": "Price",
		"className": "form-control",
		"name": "price"
	},
	{
		"type": "button",
		"subtype": "submit",
		"label": "Button",
		"className": "btn btn-default",
		"name": "submit_requirement",
		"style": "default"
	}
]