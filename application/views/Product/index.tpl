<div class="span10" id="content">
	<div class="row-fluid" ng-controller="tableCtrl">
		<div class="span12">
			<!-- block -->
			<div class="block" >
				<div class="navbar navbar-inner block-header">
					<div class="muted pull-left">food</div>
					<div class="pull-right">
						<a href="/Product/insert" class="icon-plus"></a>
					</div>
				</div>
				<div class="block-content collapse in">
					<table class="table table-striped">
						<thead>
							<tr>
								<!-- <th>id</th> -->
								<th>name</th>
								<th>price</th>
								<th>status</th>
								<th>ca_name</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="food in foods">
								<!-- <td>{{food.f_id}}</td> -->
								<td>{{food.f_name}}</td>
								<td>
									large_price:{{food.f_large_price}}<br>
									medium_price:{{food.f_medium_price}}<br>
									small_price:{{food.f_small_price}}
								</td>
								<td>{{food.f_status}}</td>
								<td>{{food.ca_name}}</td>
								<td>
									<a href="/Product/editForm/{{food.f_id}}" class="icon-cog"></a>
									<a href="/Product/delFood/{{food.f_id}}" ng-click="del(food.f_id, $event)" class=" icon-remove"></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /block -->
		</div>
	</div>
</div>