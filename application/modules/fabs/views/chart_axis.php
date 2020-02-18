<?php header("Content-Type: application/json"); ?>
{
	"chart": { "type": "line" },
	"title": { "text": "<?php echo @if_empty($title, '');?>" },
	"subtitle": { "text": "<?php echo @if_empty($subtitle, '');?>" },
	"xAxis": { "categories": <?php echo @if_empty($xaxis_categories, '');?>},
	"yAxis": <?php echo @if_empty($yaxis, '
		{ 
			"labels": { "format": "{value}" },
			"title": { "text": "Price" }
		}
	');?>,
	"tooltip": { "shared": true },
	"plotOptions": {
        "area": {
            "stacking": "normal",
            "lineColor": "#ffffff",
            "lineWidth": 1,
            "marker": {
                "lineWidth": 1,
                "lineColor": "#ffffff"
            }
        }
    },
	"series": <?php echo @if_empty($series, '');?>
}