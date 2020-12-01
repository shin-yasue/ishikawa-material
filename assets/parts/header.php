<?php
$active = array();
$active[$category] = 'class="active"';
print <<< EOH
<header>
	<div class="wrap">
		<article class="logo"></article>
		<article class="menu">
			<ul class="pages">
				<li>
					<a href="" {$active['ホーム']}>ホーム</a>
				</li>
				<li>
					<a href="" {$active['事業案内']}>事業案内</a>
					<span class="switch"></span>
					<div class="in_pages">
						<a href="">[一般]　古紙</a>
						<a href="">[一般]　鉄スクラップ</a>
						<a href="">[法人]　鉄スクラップ</a>
						<a href="">[法人]　機密書類</a>
						<a href="">[法人]　記録媒体</a>
						<a href="">[法人]　産業廃棄物</a>
						<a href="">コシココ</a>
						<a href="">お片付けサービス</a>
					</div>
				</li>
				<li>
					<a href="" {$active['会社概要']}>会社概要</a>
					<span class="switch"></span>
					<div class="in_pages">
						<a href="">社長メッセージ</a>
						<a href="">基本方針</a>
						<a href="">会社概要</a>
						<a href="">沿革</a>
					</div>
				</li>
				<li>
					<a href="" {$active['方針']}>方針</a>
					<span class="switch"></span>
					<div class="in_pages">
						<a href="">特定個人情報・個人情報保護方針</a>
						<a href="">情報セキュリティ基本方針</a>
						<a href="">一般事業主行動計画</a>
						<a href="">許可一覧</a>
					</div>
				</li>
				<li>
					<a href="" {$active['取り組み']}>取り組み</a>
					<span class="switch"></span>
					<div class="in_pages">
						<a href="">総合リサイクル業</a>
						<a href="">リサイクルの啓発活動</a>
						<a href="">「緑の募金」への寄付</a>
						<a href="">太陽光発電事業の推進</a>
						<a href="">委員会活動</a>
					</div>
				</li>
				<li>
					<a href="" {$active['拠点一覧']}>拠点一覧</a>
					<span class="switch"></span>
					<div class="in_pages">
						<a href="">アクセスマップ</a>
						<a href="">本社</a>
						<a href="">千種営業所</a>
						<a href="">港リサイクルセンター</a>
						<a href="">守山営業所</a>
						<a href="">鳴海営業所</a>
						<a href="">豊明営業所</a>
						<a href="">シュレッドセンター</a>
						<a href="">東郷センター</a>
						<a href="">緑リサイクルセンター</a>
					</div>
				</li>
			</ul>
			<div class="btn">
				<a class="recruit" href="">リクルート</a>
				<a class="contact" href="">お問い合わせ</a>
				<a class="tel" href="">お電話</a>
			</div>
		</article>
		<div class="menu_switch"></div>
	</div>
</header>
EOH;
?>