<!-- <div class="ui thin vertical inverted labeled icon left overlay sidebar menu" >abc</div> -->
<div class="ui black medium launch right attached button" ng-click="alert()">
	<i class="icon list layout"></i>
	<span class="text" style="display:none;">Menu</span>
</div>
<script>
$(".launch.button").mouseenter(function(){
	$(this).stop().animate({width: '100px'}, 300, 
		function(){$(this).find('.text').show();});
}).mouseleave(function (event){
	$(this).find('.text').hide();
	$(this).stop().animate({width: '70px'}, 300);
});
// $(".ui.overlay.sidebar").sidebar({overlay: true})
// .sidebar('attach events','.ui.launch.button');
</script>

<script type="text/javascript">
$('#reportrange').daterangepicker(
{
	ranges: {
		'Today': [moment(), moment()],
		'Last 7 Days': [moment().subtract('days', 6), moment()],
		'Last 30 Days': [moment().subtract('days', 29), moment()],
		'This Month': [moment().startOf('month'), moment().endOf('month')],
		'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')],
		'Last Three Months': [moment().subtract('month', 3).startOf('month'), moment().subtract('month').endOf('month')],
		'Last Six Months': [moment().subtract('month', 6).startOf('month'), moment().subtract('month').endOf('month')],
		'This Year': [moment().startOf('year'),moment()],
	},
	format: 'YYYY-MM-DD',
	startDate: '<?php echo date("Y");?>-1-1',
	endDate: '<?php echo date("Y-m-d");?>',
	showWeekNumbers:true,
	showDropdowns:true
},
function(start, end) {
	$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	$('#fro').val(start.format('YYYY-MM-D') ).trigger('change');
	$('#to').val(end.format('YYYY-MM-D') ).trigger('change');

	angular.element('#filterNav').scope().bindDates(start.format('YYYY-MM-D'),end.format('YYYY-MM-D'));
}
);

$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
})
</script>
<div class="ui right aligned grid" style="padding-left: 100px;">
	<div class="right floated right aligned six wide column">
		<div class="blue ui buttons">
			<div id="reportrange" class="ui button pull-right filterButton" style="">
				<i class="fa fa-calendar fa-md"></i>
				<span><?php echo 'January '.date("1, Y", strtotime('first day of this year')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
			</div>
		</div>
	</div>

	<div class="left floated right aligned six wide column">
		<ui-select ng-model="filters.entities.selected" theme="selectize" ng-disabled="disabled" style="min-width: 300px;">
		<ui-select-match placeholder="Search Criteria to Filter by...">{{$select.selected.name +" ("+ $select.selected.type +")"  }}</ui-select-match>
			<ui-select-choices group-by="'type'" repeat="entity in filters.entities | entityFilter: {name: $select.search, type: $select.search}">
			<div ng-bind-html="entity.name | highlight: $select.search"></div>
			<small>
				email: {{entity.email}}
				phone: <span ng-bind-html="''+entity.phone | highlight: $select.search"></span>
			</small>
			</ui-select-choices>
		</ui-select>
	</div>

	<div class="left floated left aligned two wide column">
		 <div class="ui button blue">Reset</div>
	</div>


</div>
<style>

.opensleft{
	top: 123.5px; 
	right: 209.875px; 
	left: auto; 
	display: none;
}

</style>