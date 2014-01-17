<h1 align='center'>phalcon 딜 리스트 페이징 테스트</h1>
<h4>{{page.items|length}} {{'<<<<<<<<< 필터사용' }}</h2>
{{ "<h1>Hello<h1>"|e }}
{# note: 주석
<h4>{{ "   hello   "|trim }} {{'<<<<<<<<< 필터사용' }}</h2>
#}
<style>
td{border-right: 1px solid #ccc;border-bottom: 1px solid #ccc;text-align: center;padding: 5px;}
</style>

<table border="1" width="90%" align='center'>
    <tr>
        <th>Deal Id</th>
        <th>정상가격</th>
        <th>판매가격</th>
        <th>비 고</th>
    </tr>
    {% for item in page.items %}
    <tr>
        <td>
        	{{ item.deal_id }}
        </td>
        <td>
        	{{ item.price_org }}
        </td>
        <td>
        	{{ item.price }}
        </td>
        <td>
        	{{ link_to('dealinfo/show/' ~ item.deal_id ~ '/' ~ _GET["page"], '상세정보 보기') }}
        </td>
    </tr>   
    {% endfor %}
</table>
<div id='pagenation' align='center' style='margin-top: 10px;'>
	{{ link_to('dealinfo', '처음') }}
	{{ link_to('dealinfo?page=' ~ page.before, '이전') }}
	{{ link_to('dealinfo?page=' ~ page.next, '다음') }}
	{{ link_to('dealinfo?page=' ~ page.last, '마지막') }}

	{{ 'You are in page ' ~ page.current ~ ' of ' ~ page.total_pages }}
</div>
{{ '루프 테스트 <br />' }}
{% set numbers = ['one': 1, 'two': 2, 'three': 3] %}

{% for name, value in numbers %}
  Name: {{ name }} Value: {{ value }}
{% endfor %}

{% set robots = ['1': 'Voltron', '2': 'Astro Boy', '3': 'Terminator', '4': 'C3PO'] %}
<br />
<br />
홀수 || 짝수 테스트
<br />
{% for position, name in robots %}
    {% if position is even %}{# 홀수일땐 odd #}
        {{ name }}
    {% endif %}
{% endfor %}


