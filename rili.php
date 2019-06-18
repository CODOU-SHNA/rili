<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>日历</title>
<style>
.month{
  border-collapse:collapse;
  table-layout:fixed;
  width:780px;
}
.month caption {
text-align:left;
font-family:宋体,arial;
font-size:20px;
font-weight:bold;
padding-bottom:6px;
}
.month th{
  border:1px soild #999;
  border-bottom:none;
  padding:3px 2px 2px;
  margin:0;
  background-color:#ADD;
  color:#333;
  font:80% 宋体;
}
.month td{
border:1px soild #AAA;
font:12px 宋体;
padding:2px 2px;
margin:0;
vertical-align:top;
}
.month td.previous, .month td.next{
background-color:#eee;
color:#A6A6A6;
}
.month td.active{
background-color:#B1CBE1;
border; 2px soild #4682B4;
}
.month ul{
list-style-type:none;
margin:3px;
padding:0;
}
.month li{
color:#fff;
padding:2px;
margin-bottom:6px;
height:34px;
overflow:hidden;
width:100px;
border:2px #c00 soild;
background-color:#c66;
}
.month td li.important{
border:1px #fff soild;
background-color:#f00;
} 

</style>
</head>


<body>
<table class="month" border="1">
<caption> 2007年10月</caption>
<tr>
<th>星期一</th>
<th>星期二</th>
<th>星期三</th>
<th>星期四</th>
<th>星期五</th>
<th>星期六</th>
<th>星期日 </th>
</tr>
<tr>
<td class="previous">25</td> 
<td class="previous">26</td> 
<td class="previous">27</td> 
<td class="previous">28</td> 
<td class="previous">29</td> 
<td>1</td>
<td class="active">2
<ul>
<li class="important">完成书稿第三部分</li>
<li>查jQuery相关资料</li>
</ul>
</tr>
<tr>
<td class="active">3
<ul>
<li>网站改版</li>
</ul>
</td>
<td>4</td>
<td>5</td>
<td>6</td>
<td>7</td>
<td>8</td>
<td class="active">9
<ul>
<li>案例分析</li>
<li>回复读者邮件</li>
</ul>
</td>
</tr>
<tr>
<td>10</td>
<td>11</td>
<td>12</td>
<td class="active">13
<ul>
<li>网站改版策划</li>
</ul>
</td>
<td class="active">14
<ul>
<li>录制jQuey视频教程</li>
<li>其他视频教程策划</li>
</ul>
</td>
<td>15</td>
<td>16</td>
</tr>
<tr>
<td>17</td>
<td>18</td>
<td>19</td>
<td>20</td>
<td>21</td>
<td class="active">22
<ul>
<li>研讨会</li>
</ul>
</td>
<td class="active">23
<ul>
<li>学习编译原理</li>
<li>锻炼</li>
</ul>
</td>
</tr>
<tr>
<td>24</td>
<td class="active">25
<ul>
<li>准备资料</li>
<li>学习编译原理</li>
</ul>
</td>
<td>26</td>
<td class="active">27
<ul>
<li>准备资料</li>
<li>整理硬盘文件</li>
</ul>
</td>
<td>28</td>
<td>29</td>
<td>30</td>
</tr>
<tr>
<td class="active">31
<ul>
<li>整理资料</li>
<li>整理硬盘文件</li>
</ul>
</td>
<td class="next">1</td>
<td class="next">2</td>
<td class="next">3</td>
<td class="next">4</td>
<td class="next">5</td>
<td class="next">6</td>
</tr>
</body>
</html>
