[
	{
		"type": "autocomplete",
		"required": true,
		"label": "Order Name/Number",
		"placeholder": "Order Name/Number",
		"className": "form-control",
		"name": "order_id",
		"values":
                
                <?php
                $data=array(
                    array('label'=>"kokai00003","value"=>1),
                    array("label"=>"orderXYZ","value"=>2),
                    array("label"=>'nasiruddin',"value"=>3),
                     array("label"=>'Bhartiye',"value"=>4),
                    );
                echo json_encode($data);
               
              /*  
                [
			{
				"label": "kokai00003",
				"value": "1"
			},
			{
				"label": "orderXYZ",
				"value": "2"
			},
			{
				"label": "orderABC",
				"value": "3"
			},
			{
				"label": "82308",
				"value": "4"
			}
		] */?>
	},
	{
		"type": "text",
		"subtype": "datetime-local",
		"required": true,
		"label": "Date Time",
		"description": "Date and Time when you Inspect this cutting Operation Data",
		"placeholder": "Date Time",
		"name": "date",
		"className": "red form-control"
	},
	{
		"type": "number",
		"label": "Approve Quantity",
		"placeholder": "Approve Quantity",
		"className": "form-control",
		"name": "approve"
	},
	{
		"type": "number",
		"required": true,
		"label": "Reject Quantity",
		"placeholder": "Reject Quantity",
		"className": "form-control",
		"name": "reject"
	},
	{
		"type": "number",
		"required": true,
		"label": "Total Quantity",
		"description": "Total Quantity Approve + Reject / Should be",
		"placeholder": "Total Quantity",
		"className": "form-control",
		"name": "total"
	},
	{
		"type": "button",
		"subtype": "submit",
		"label": "Submit",
		"className": "btn btn-info",
		"name": "submit",
		"value": "Submite",
		"style": "info"
	}
]