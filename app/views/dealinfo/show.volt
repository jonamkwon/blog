<h1>딜 상세정보</h1>
<?php //print_r($deals);?>
<ul>
{% for deal in deals %}
		<li>{{ '딜아이디: ' ~ deal.deal_id }}</li>
		<li>{{ '판매가격: ' ~ deal.price ~ '원'}}</li>
		<li>{{ '판매시작시간: ' ~ date('Y년m월d일', deal.sale_start_time) }}</li>
		<li>{{ '판매종료시간: ' ~ date('Y년m월d일', deal.sale_end_time) }}</li>
{% endfor %}
</ul>
<p>{{link_to('dealinfo?page=' ~ page, '리스트')}}</p>


{{date('y-m-d', time())}}

{{time()}}

master branch
