<?php include("include/head.html"); ?> 

    <!-- Add your site or application content here -->
   <?php include("include/top_head.html"); ?> 
    <div id="container" class="mic clearfix">
    	<header>
	    	<h1><a href="#" class="ir">ilikemassage.com</a></h1>
	    	<div class="share">
		    	<a href="#"><img src="img/icon-facebook.png" alt="" /></a>
		    	<a href="#"><img src="img/icon-twitter.png" alt="" /></a>
		    	<a href="#"><img src="img/icon-rss.png" alt="" /></a>
		    	<a href="#"><img src="img/icon-youtube.png" alt="" /></a>
		    	<a href="#"><img src="img/icon-address.png" alt="" /></a>
	    	</div> <!-- .share -->
	    	<div class="banner">
	    		<a href="#"><img src="img/banner-1100x100.png" alt="" class="banner" /></a>
	    	</div>
	    	<?php include("include/nav_home.html"); ?>
    	</header>
    	<article class="round full">
	    	<h2 class="ir">Massage Inforamation Center</h2>
	    	<div class="map">
		    	
	    	</div>
	    	<div class="map_point">
		    	<label for="search_shop">Search</label>
		    	<form action="" id="search_form">
		    		<table>
				    	<tbody>
				    		<tr>
				    			<td><label for="search_shop">ชื่อร้าน (Name) :</label></td>
				    			<td><input type="text" name="search_shop" id="search_shop" placeholder="ใส่ชื่อร้านบางส่วนหรือทั้งหมด" /></td>
				    			<td><label for="search_type">ประเภทร้าน (Type) :</label></td>
				    			<td>
					    			<select name="" id="">
					    				<option value="">เลือกร้านทุกประเภท</option>
						    			<option value="">อาบ อบ นวด</option>
						    			<option value="">นวดซาวน่า คาราโอเกะ</option>
						    			<option value="">นวดพริ๊ตตี้</option>
						    			<option value="">โคโยตี้</option>
						    			<option value="">ฮิปโฮเทลโรงแรม 24 ชม.</option>
					    			</select>
				    			</td>
				    			<td rowspan="4">
					    			<div class="bullet">
					    				<ul class="v">
					    					<li><img src="img/bullet-massage.png" alt="" /> อาบ อบ นวด (Massage)</li>
					    					<li><img src="img/bullet-karaoke.png" alt="" /> นวดซาวน่า คาราโอเกะ (Sauna Karaoke)</li>
					    					<li><img src="img/bullet-pretty.png" alt="" /> นวดพริตตี้ (Massage by pretty)</li>
					    					<li><img src="img/bullet-coyote.png" alt="" /> โคโยตี้ (Coyote)</li>
					    					<li><img src="img/bullet-hotel.png" alt="" /> ฮิปโฮเทลโรงแรม 24 ชม. (Hip Hotel)</li>
					    				</ul>
					    			</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td><label for="search_zone">พื้นที่ (Zone) :</label></td>
				    			<td>
					    			<select name="" id="">
					    				<option value="">เลือกทุกโซน</option>
					    				<option value="">โซนรัชดา โซนแสงสีกลางคืน</option>
					    				<option value="">โซนพระราม9 ดินแดง พลาดแล้วจะเสียใจ</option>
					    				<option value="">โซนเพชรบุรี ถนนศรีอยุธยา มักะสัน ขึ้นชื่อเรื่องอ่าง</option>
					    				<option value="">โซนกรุงเทพชั้นใน ดุสิต พระนคร พญาไทย ราชเทวี</option>
					    				<option value="">โซนรามคำแหง(สุขาภิบาล) มีนบุรี สะพานสูง คลองสามวา</option>
					    				<option value="">โซนปทุมวัน สุขุมวิทช่วงต้น สีลม สาธร พระราม3 บางคอแหลม ประเวศ</option>
					    				<option value="">โซนลาดพร้าว จตุจักร บางซื่อ บึงกุ่ม คันนายาว</option>
					    				<option value="">โซนพัฒนาการ คลองเตย วัฒนา พระโขนง สวนหลวง ลาดกระบัง บางนา หนองจอก</option>
					    				<option value="">โซนฝั่งธน เบื่อฝั่งเมืองเที่ยวฝั่นธน</option>
					    				<option value="">โซนดอนเมือง สายไหม หลักสี่ บางเขน</option>
					    				<option value="">โซนปริมณฑล</option>
					    				<option value="">โซนภูธร ขึ้นเหนือล่องใต้เที่ยวไปด้วยกัน</option>
					    			</select>
				    			</td>
				    			<td><label for="search_score">ผลโหวต (Vote Score) :</label></td>
				    			<td>
					    			<select name="" id="">
					    				<option value="">เลือกทุกช่วงคะแนน</option>
					    				<option value="">0-3 คะแนน</option>
					    				<option value="">4-5 คะแนน</option>
					    				<option value="">6-7 คะแนน</option>
					    				<option value="">8-10 คะแนน</option>
					    			</select>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td><label for="search_price">ราคาเริ่มต้น (Price) :</label></td>
				    			<td>
					    			<select name="" id="">
					    				<option value="">เลือกทุกราคา</option>
						    			<option value="">1 - 1000</option>
						    			<option value="">1001 - 1500</option>
						    			<option value="">1501 - 2000</option>
						    			<option value="">2001 - 2500</option>
						    			<option value="">2501 - 4000</option>
						    			<option value="">4001 ขึ้นไป</option>
					    			</select>
				    			</td>
				    			<td><label for="search_promotion">โปรโมชั่น (Promotion) :</label></td>
				    			<td>
					    			<select name="" id="">
					    				<option value="">เลือกทุกโปรโมชั่น</option>
						    			<option value="">มีรายการโปรโมชั่น</option>
						    			<option value="">กำลังจะมีปาร์ตี้</option>
					    			</select>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td colspan="4" class="submit">
				    				<input type="checkbox" name="search_all" id="search_all" value="search_all"> <label for="search_all">ทั้งหมด</label>
					    			<input type="submit" value="ค้นหา" />
				    			</td>
				    		</tr>
				    	</tbody>
		    		</table>
		    	</form>
	    	</div>
    	</article>
	    <article id="search_result">
		    <section class="round">
			    <h2 class="ir">Search Result</h2>
			    <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
			     <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
			     <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
			     <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
			     <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
			     <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
			     <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
		    </section>
		     <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
		     <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
			    <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
			    <div>
				    <table>
					    <tbody>
						    <tr>
						    	<td rowspan="5" class="logo"><img src="img/logo-ocean_cabana.png" alt="" /></td>
						    	<td class="labels"><strong>ชื่อ:</strong></td>
						    	<td>Ocean Cabana</td>
						    	<td rowspan="4" class="address">
							    	<div>
							    		<strong>ที่อยู่ </strong>							    	
										ซ.งามวงศ์วาน 22  ถ.งามวงศ์วาน
										อ.เมือง  จ.นนทบุรี 11000 <br />
										โทร : 0-2951-8045-6
									</div>
						    	</td>
						    </tr>
						    <tr>
						    	<td><strong>ประเภทร้าน:</strong></td>
						    	<td>อาบ อบ นวด</td>
						    </tr>
						    <tr>
						    	<td><strong>รายละเอียด:</strong></td>
						    	<td>สถานบริการอาบ อบ นวด ย่านงามวงศ์วาน ตกแต่งทันสมัย</td>
						    </tr>
						    <tr>
						    	<td><strong>ราคา:</strong></td>
						    	<td>1,400 - 2,900 บาท</td>
						    </tr>
						    <tr>
						    	<td></td>
						    	<td colspan="2" class="vote">คะแนน Vote <strong>8.2</strong>  จำนวนคนโหวต 12 คน </td>
						    </tr>
					    </tbody>
				    </table>
			    </div>
	    </article>
	    <aside>
		    <?php include("include/side_1.html"); ?>
	    </aside>
	     <div class="google_ads">
		    <img src="img/mockup/banner-google_ads.png" alt="" />
	    </div>
    </div> <!-- #container -->
    <script type="text/javascript">
	    jQuery(document).ready(function($){ 
	    	$('#header > .inner p a:nth-child(2)').addClass('active')
	    });
    </script>
<?php include("include/footer.html"); ?> 

<?php include("include/footer-script.html"); ?> 
