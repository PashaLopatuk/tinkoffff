<?
$check_data = $conn->query("SELECT * FROM tinkoff_history ORDER BY id DESC LIMIT 1")->fetch_assoc();
?>

<!DOCTYPE html>
<html class="webp" lang="ru">

<head>
	<title data-meta-dynamic="true">Тинькофф — Кредитные и дебетовые карты, кредиты для бизнеса и физических лиц</title>
	<meta property="og:title" content="Тинькофф — финансовые услуги для физических и юридических лиц" data-meta-dynamic="true">
	<meta property="og:description" content="Лучший мобильный банк в мире! По версии Global Finance — Best Digital Bank Award 2020" data-meta-dynamic="true">
	<meta property="og:site_name" content="Тинькофф Банк" data-meta-dynamic="true">
	<meta property="og:image" content="https://acdn.tinkoff.ru/static/pages/files/8415dfe5-af9f-4474-9001-506d1fcd59ff.png" data-meta-dynamic="true">
	<meta property="og:image:secure_url" content="https://acdn.tinkoff.ru/static/pages/files/8415dfe5-af9f-4474-9001-506d1fcd59ff.png" data-meta-dynamic="true">
	<meta name="robots" content="all" data-meta-dynamic="true">
	<meta name="robots" content="index, follow" data-meta-dynamic="true">
	<meta name="robots" content="noarchive" data-meta-dynamic="true">
	<meta name="keywords" content="Тинькофф, Tinkoff, онлайн банк, интернет банк, лучший банк, кредит, оформить кредит, кредит онлайн, кредитная карта, оформить кредитную карту, кредитная карта по интернету, кредитная карта онлайн, кредит наличными, кредит наличными онлайн, дебетовая карта, перевод с карты на карту" data-meta-dynamic="true">
	<link rel="canonical" href="https://www.tinkoff.ru/payments/provider-transfer-third-party/success/11026008979/" data-meta-dynamic="true">
	<meta name="description" content="Оформление онлайн и бесплатная доставка: кредитные и дебетовые карты, кредиты, сотовый оператор, страхование и другие услуги для физических и юридических лиц" data-meta-dynamic="true">
	<meta name="twitter:card" content="summary_large_image" data-meta-dynamic="true">
	<meta name="twitter:site" content="@tinkoff_bank" data-meta-dynamic="true">
	<meta name="twitter:image" content="https://acdn.tinkoff.ru/static/pages/files/8415dfe5-af9f-4474-9001-506d1fcd59ff.png" data-meta-dynamic="true">
	<meta name="twitter:title" content="Тинькофф — финансовые услуги для физических и юридических лиц" data-meta-dynamic="true">
	<meta name="twitter:creator" content="@tinkoff_bank" data-meta-dynamic="true">
	<meta name="twitter:description" content="Лучший мобильный банк в мире! По версии Global Finance — Best Digital Bank Award 2020" data-meta-dynamic="true">
	<meta property="og:url" content="https://www.tinkoff.ru/payments/provider-transfer-third-party/success/11026008979/" data-meta-dynamic="true">
	<meta property="og:type" content="website" data-meta-dynamic="true">
	<meta property="og:locale" content="ru_RU" data-meta-dynamic="true">
	<meta property="og:image:type" content="image/png" data-meta-dynamic="true">
	<meta property="og:image:width" content="1200" data-meta-dynamic="true">
	<meta property="og:image:height" content="630" data-meta-dynamic="true">
	<style data-tds-html-zoom="true">
	html { zoom: 1 }
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, user-scalable=no">

	<style type="text/css">
	@font-face {
	    font-family: 'haas';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Regular.woff2') format('woff2');
	    font-weight: 400;
	    font-style: normal;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'haas';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Medium.woff2') format('woff2');
	    font-weight: 500;
	    font-style: normal;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'haas';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Bold.woff2') format('woff2');
	    font-weight: 600;
	    font-style: normal;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'TinkoffSans';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans.woff2') format('woff2');
	    font-weight: 400;
	    font-style: normal;
	    text-rendering: optimizeLegibility;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'TinkoffSans';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans_Medium.woff2') format('woff2');
	    font-weight: 500;
	    font-style: normal;
	    text-rendering: optimizeLegibility;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'TinkoffSans';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans_Bold.woff2') format('woff2');
	    font-weight: 600;
	    font-style: normal;
	    text-rendering: optimizeLegibility;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'dsText';
	    font-style: normal;
	    font-weight: 400;
	    font-display: swap;
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Regular.woff2') format('woff2');
	}
	
	@font-face {
	    font-family: 'dsText Fallback';
	    font-style: normal;
	    font-weight: 400;
	    src: local('Arial');
	    ascent-override: 89.53%;
	    descent-override: 22.73%;
	    line-gap-override: 0.00%;
	    size-adjust: 100.30%;
	}
	
	@font-face {
	    font-family: 'dsText';
	    font-style: normal;
	    font-weight: 500;
	    font-display: swap;
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Medium.woff2') format('woff2');
	}
	  
	@font-face {
	    font-family: 'dsText Fallback';
	    font-style: normal;
	    font-weight: 500;
	    src: local('Arial');
	    ascent-override: 87.68%;
	    descent-override: 24.01%;
	    line-gap-override: 0.00%;
	    size-adjust: 102.88%;
	}
	
	@font-face {
	    font-family: 'dsText';
	    font-style: normal;
	    font-weight: 600;
	    font-display: swap;
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Bold.woff2') format('woff2');
	}
	  
	@font-face {
	    font-family: 'dsText Fallback';
	    font-style: normal;
	    font-weight: 600;
	    src: local('Arial Bold');
	    ascent-override: 92.97%;
	    descent-override: 27.30%;
	    line-gap-override: 0.00%;
	    size-adjust: 97.45%;
	}
	
	@font-face {
	    font-family: 'dsHeading';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans.woff2') format('woff2');
	    font-weight: 400;
	    font-style: normal;
	    text-rendering: optimizeLegibility;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'dsHeading Fallback';
	    font-style: normal;
	    font-weight: 400;
	    src: local('Arial');
	    ascent-override: 103.36%;
	    descent-override: 36.00%;
	    line-gap-override: 0.00%;
	    size-adjust: 88.33%;
	}
	
	@font-face {
	    font-family: 'dsHeading';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans_Medium.woff2') format('woff2');
	    font-weight: 500;
	    font-style: normal;
	    text-rendering: optimizeLegibility;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'dsHeading Fallback';
	    font-style: normal;
	    font-weight: 500;
	    src: local('Arial');
	    ascent-override: 93.77%;
	    descent-override: 32.66%;
	    line-gap-override: 0.00%;
	    size-adjust: 97.37%;
	}
	
	@font-face {
	    font-family: 'dsHeading';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans_Bold.woff2') format('woff2');
	    font-weight: 600;
	    font-style: normal;
	    text-rendering: optimizeLegibility;
	    font-display: swap;
	}
	
	@font-face {
	    font-family: 'dsHeading Fallback';
	    font-style: normal;
	    font-weight: 600;
	    src: local('Arial');
	    ascent-override: 89.11%;
	    descent-override: 31.04%;
	    line-gap-override: 0.00%;
	    size-adjust: 102.46%;
	}
	</style>
	<link data-href="https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/fonts.css" rel="stylesheet">
	<style type="text/css">
	/* Neue Haas Unica */
	@font-face {
	    font-family: 'haas';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Thin.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Thin.woff') format('woff');
	    font-weight: 200;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'haas';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Light.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Light.woff') format('woff');
	    font-weight: 300;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'haas';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Regular.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Regular.woff') format('woff');
	    font-weight: 400;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'haas';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Medium.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Medium.woff') format('woff');
	    font-weight: 500;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'haas';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Bold.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Bold.woff') format('woff');
	    font-weight: 600;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'haas';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Heavy.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Heavy.woff') format('woff');
	    font-weight: 700;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'haas';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Black.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Black.woff') format('woff');
	    font-weight: 800;
	    font-weight: bold;
	    font-style: normal;
	}
	
	
	/* PF Highway Sans Pro */
	@font-face {
	    font-family: 'pfhighway';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-ExtraThin.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-ExtraThin.woff') format('woff');
	    font-weight: 100;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'pfhighway';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Thin.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Thin.woff') format('woff');
	    font-weight: 200;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'pfhighway';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Light.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Light.woff') format('woff');
	    font-weight: 300;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'pfhighway';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Regular.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Regular.woff') format('woff');
	    font-weight: 400;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'pfhighway';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Medium.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Medium.woff') format('woff');
	    font-weight: 600;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'pfhighway';
	    src:
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Bold.woff2') format('woff2'),
	        url('https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v7/PFHighwaySansPro-Bold.woff') format('woff');
	    font-weight: 800;
	    font-weight: bold;
	    font-style: normal;
	}
	
	/* TinkoffSans */
	
	@font-face {
	    font-family: 'TinkoffSans';
	    src: url('https://www.cdn-tinkoff.ru/platform/fonts/TinkoffSans/v1/TinkoffSans.woff2') format('woff2'),
	         url('https://www.cdn-tinkoff.ru/platform/fonts/TinkoffSans/v1/TinkoffSans.woff') format('woff');
	    font-style: normal;
	    font-weight: normal;
	    text-rendering: optimizeLegibility;
	}
	
	@font-face {
	    font-family: 'dsText';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Regular.woff2') format('woff2');
	    font-weight: 400;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'dsText';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Medium.woff2') format('woff2');
	    font-weight: 500;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'dsText';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Bold.woff2') format('woff2');
	    font-weight: 600;
	    font-style: normal;
	}
	
	@font-face {
	    font-family: 'dsHeading';
	    src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans.woff2') format('woff2');
	    font-weight: 400;
	    font-style: normal;
	    text-rendering: optimizeLegibility;
	}
	
	@font-face {
	  font-family: 'dsHeading';
	  src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/2.0.0/DSHeading_Medium.woff2')
	    format('woff2');
	  font-weight: 500;
	  font-style: normal;
	  font-display: swap;
	  text-rendering: optimizeLegibility;
	}
	
	@font-face {
	  font-family: 'dsHeading';
	  src: url('https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/2.0.0/DSHeading_Bold.woff2')
	    format('woff2');
	  font-weight: 600;
	  font-style: normal;
	  font-display: swap;
	  text-rendering: optimizeLegibility;
	}
	</style>
	<link data-href="https://www.cdn-tinkoff.ru/platform/fonts/font-v8.css" rel="stylesheet">
	<style type="text/css">
	.feedback__a2AoTh .icon{transition:opacity .25s ease}.feedback__a2AoTh .icon__border{opacity:0}.feedback__a2AoTh .icon__stroke{fill:none;stroke:currentColor;stroke-linejoin:round;stroke-linecap:round;stroke-miterlimit:10}.feedback__a2AoTh .icon__stroke_fill_currentColor{fill:currentColor}.feedback__a2AoTh .icon__fill{stroke:none;fill:currentColor}.feedback__a2AoTh .icon__fill-bg{fill:#fff}.feedback__a2AoTh .icon__active-shown{opacity:0;transition:opacity .25s ease}.feedback__a2AoTh{display:inline-block;max-width:100%;max-height:100%;width:100%;height:100%;border-radius:50%}.feedback__a2AoTh svg{vertical-align:top}.feedback__a2AoTh .icon__stroke:not(.icon__stroke_non-scaling){stroke-width:2.5px}.feedback__b2AoTh{vertical-align:top}.feedback__c2AoTh{vertical-align:middle}.feedback__d2AoTh{vertical-align:bottom}.feedback__e2AoTh .icon__border{opacity:1}.feedback__f2AoTh .icon__active-shown{opacity:1}.feedback__g2AoTh{color:currentColor}.feedback__h2AoTh{width:48px;height:48px}.feedback__i2AoTh{color:#fff;color:var(--color-white);background-color:#22a053;background-color:var(--color-green-emerald)}.feedback__i2AoTh .icon__border{opacity:0}.feedback__j2AoTh{color:#3e4757;color:var(--color-dorblue);background-color:#eef2f7;background-color:var(--color-kapibara)}.feedback__j2AoTh .icon__border{opacity:0}.feedback__k2AoTh{color:#333;color:var(--color-black-magic);background-color:#dddfe0;background-color:var(--color-kanifol)}.feedback__k2AoTh .icon__border{opacity:0}.feedback__l2AoTh{color:#3e4757;color:var(--color-dorblue);background-color:#ffdd2d;background-color:var(--color-yellokatya)}.feedback__l2AoTh .icon__border{opacity:0}.feedback__m2AoTh{color:#3e4757;color:var(--color-dorblue);background-color:#74b9d7;background-color:var(--color-blue-viking)}.feedback__m2AoTh .icon__border{opacity:0}.feedback__n2AoTh{color:#7f8389;color:var(--color-rolling-stone);background-color:#f4f4f5}.feedback__n2AoTh .icon__border{opacity:0}.feedback__o2AoTh{color:#333;color:var(--color-black-magic);background-color:#eef2f7;background-color:var(--color-kapibara)}.feedback__o2AoTh .icon__border{opacity:0}.feedback__p2AoTh{color:#333;color:var(--color-black-magic);background-color:#fff;background-color:var(--color-white)}.feedback__p2AoTh .icon__border{opacity:0}.feedback__q2AoTh{color:#333;color:var(--color-black-magic);background-image:linear-gradient(to bottom,#fce4a0,#d3c08d);background-image:linear-gradient(to bottom,var(--color-worldcup1),var(--color-worldcup2))}.feedback__q2AoTh .icon__border{opacity:0}.feedback__r2AoTh{color:#fff;color:var(--color-white)}.feedback__s2AoTh{color:#333;color:var(--color-black-magic)}.feedback__t2AoTh{color:#74a3c7;color:var(--color-original-blue)}.feedback__u2AoTh{color:#5b8db3;color:var(--color-original-blue-hover)}.feedback__v2AoTh{color:#9299a2;color:var(--color-sasha-gray)}.feedback__w2AoTh{color:#dddfe0;color:var(--color-kanifol)}.feedback__x2AoTh{color:#ffdd2d;color:var(--color-yellokatya)}.feedback__y2AoTh{color:#d23c3c;color:var(--color-red-bank-hover)}.feedback__z2AoTh{color:#22a053;color:var(--color-green-emerald)}.feedback__A2AoTh{color:currentColor}.feedback__B2AoTh{width:12px;height:12px}.feedback__C2AoTh{width:14px;height:14px}.feedback__D2AoTh{width:18px;height:18px}.feedback__E2AoTh{width:20px;height:20px}.feedback__F2AoTh{width:24px;height:24px}.feedback__G2AoTh{width:30px;height:30px}.feedback__H2AoTh{width:32px;height:32px}.feedback__I2AoTh{width:36px;height:36px}.feedback__J2AoTh{width:42px;height:42px}.feedback__J2AoTh .icon__stroke:not(.icon__stroke_non-scaling){stroke-width:2px}.feedback__h2AoTh{width:48px;height:48px}.feedback__K2AoTh{width:60px;height:60px}.feedback__L2AoTh{width:66px;height:66px}.feedback__L2AoTh .icon__stroke:not(.icon__stroke_non-scaling){stroke-width:2.72727px}.feedback__M2AoTh{width:72px;height:72px}.feedback__N2AoTh{width:78px;height:78px}.feedback__O2AoTh{width:84px;height:84px}.feedback__P2AoTh{width:90px;height:90px}.feedback__Q2AoTh{width:102px;height:102px}.feedback__R2AoTh{width:108px;height:108px}.feedback__S2AoTh{width:120px;height:120px}.feedback__S2AoTh .icon__stroke:not(.icon__stroke_non-scaling){stroke-width:1.6667px}.feedback__T2AoTh{width:138px;height:138px}.feedback__U2AoTh{width:174px;height:174px}.feedback__V2AoTh{width:198px;height:198px}.feedback__a1c6yF{width:60px;height:60px;position:relative}.feedback__b1c6yF{position:absolute;top:50%;left:50%;color:#333;color:var(--feedback-icon-color, #333)}.feedback__c1c6yF{transform:translate(-50%,-45%)}.feedback__d1c6yF{transform:translate(-50%,-35%)}@-webkit-keyframes feedback__u1SrUl{0%{transform:rotate(0deg)}50%{transform:rotate(360deg)}to{transform:rotate(1080deg)}}@keyframes feedback__u1SrUl{0%{transform:rotate(0deg)}50%{transform:rotate(360deg)}to{transform:rotate(1080deg)}}@-webkit-keyframes feedback__e1SrUl{0%{opacity:0}to{opacity:1}}@keyframes feedback__e1SrUl{0%{opacity:0}to{opacity:1}}@-webkit-keyframes feedback__g1SrUl{0%{opacity:1}to{opacity:0}}@keyframes feedback__g1SrUl{0%{opacity:1}to{opacity:0}}@-webkit-keyframes feedback__k1SrUl{0%{transform:scale(.1)}to{transform:scale(1)}}@keyframes feedback__k1SrUl{0%{transform:scale(.1)}to{transform:scale(1)}}@-webkit-keyframes feedback__l1SrUl{0%{transform:scale(1)}to{transform:scale(.1)}}@keyframes feedback__l1SrUl{0%{transform:scale(1)}to{transform:scale(.1)}}.feedback__a1SrUl{position:absolute;top:0;right:0;bottom:0;left:0;z-index:40;display:flex;flex-direction:column;align-items:center;justify-content:center;background-color:rgba(255,255,255,.8)}.feedback__b1SrUl{justify-content:flex-start}.feedback__c1SrUl{background-color:#fff}.feedback__d1SrUl{-webkit-animation:feedback__e1SrUl .35s ease-out forwards;animation:feedback__e1SrUl .35s ease-out forwards}.feedback__f1SrUl{-webkit-animation:feedback__g1SrUl .35s ease-out forwards;animation:feedback__g1SrUl .35s ease-out forwards}.feedback__h1SrUl{display:flex;height:100%}.feedback__i1SrUl,.feedback__j1SrUl{max-width:100%;max-height:100%}.feedback__i1SrUl{display:inline-block;flex-shrink:0;vertical-align:bottom}.feedback__d1SrUl .feedback__i1SrUl{-webkit-animation:feedback__k1SrUl .35s ease-out forwards;animation:feedback__k1SrUl .35s ease-out forwards}.feedback__f1SrUl .feedback__i1SrUl{-webkit-animation:feedback__l1SrUl .35s ease-out forwards;animation:feedback__l1SrUl .35s ease-out forwards}.feedback__m1SrUl{width:8px;height:8px}.feedback__m1SrUl .feedback__n1SrUl{stroke-width:8px}.feedback__o1SrUl{width:16px;height:16px}.feedback__o1SrUl .feedback__n1SrUl{stroke-width:8px}.feedback__p1SrUl{width:24px;height:24px}.feedback__p1SrUl .feedback__n1SrUl{stroke-width:8px}.feedback__q1SrUl{width:40px;height:40px}.feedback__q1SrUl .feedback__n1SrUl{stroke-width:6px}.feedback__r1SrUl{width:56px;height:56px}.feedback__r1SrUl .feedback__n1SrUl{stroke-width:5px}.feedback__s1SrUl{width:80px;height:80px}.feedback__s1SrUl .feedback__n1SrUl{stroke-width:4px}.feedback__t1SrUl{width:100%;text-align:center}.feedback__j1SrUl{display:inline-block;-webkit-animation:feedback__u1SrUl 3s linear infinite;animation:feedback__u1SrUl 3s linear infinite}.feedback__n1SrUl{stroke-dashoffset:100%;stroke-dasharray:306;stroke-miterlimit:10}.feedback__a3QZC9{position:fixed;top:0;right:0;bottom:0;left:0;z-index:2001;display:none;overflow:hidden;box-shadow:4px 0 24px rgba(0,0,0,.12);background:#fff;opacity:0;transition:opacity 200ms ease}@media (min-width:768px){.feedback__a3QZC9{position:static;margin-bottom:16px;width:400px;height:600px;max-height:calc(100vh - 212px);min-height:360px;border-radius:12px}}.feedback__a3QZC9 iframe{border-radius:0!important}.feedback__b3QZC9{display:block}.feedback__c3QZC9{opacity:1}.feedback__d3QZC9{overflow:hidden}@media (min-width:768px){.feedback__d3QZC9{overflow:visible}}.feedback__e3QZC9{position:absolute;top:0;height:100%;background-color:#fff;background-color:var(--color-white)}.feedback__f3QZC9{position:relative;top:50%;margin:0 20px;transform:translateY(-50%);text-align:center}.feedback__g3QZC9{margin-bottom:15px;font-size:15px}.feedback__h3QZC9 button{color:#333;color:var(--feedback-text-color, #333333);border:1px solid #ffdd2d;border:1px solid var(--feedback-button-color, #ffdd2d);background-color:#ffdd2d;background-color:var(--feedback-button-color, #ffdd2d)}.feedback__h3QZC9 button:hover{border-color:#fcc521;border-color:var(--feedback-button-color-hover, #fcc521);background-color:#ffdd2d;background-color:var(--feedback-button-color-hover, #ffdd2d)}.feedback__i3QZC9{position:relative;top:50%;transform:translateY(-50%);text-align:center;color:#ffdd2d;color:var(--feedback-button-color, #ffdd2d)}.feedback__aPY7Vk{position:relative;box-sizing:border-box;display:inline-flex;align-items:center;justify-content:center;margin:0;padding:0;max-width:100%;height:auto;border:1px solid transparent;border-radius:4px;background-color:transparent;-webkit-tap-highlight-color:transparent;color:#333;cursor:pointer;text-decoration:none;text-align:center}.feedback__aPY7Vk:focus{transition:none;outline:0;border-color:rgba(51,51,51,.48);box-shadow:inset 0 0 0 1px rgba(51,51,51,.48);background-clip:padding-box}.feedback__aPY7Vk::-moz-focus-inner{padding:0;border:0}.feedback__bPY7Vk .feedback__cPY7Vk{letter-spacing:1px;text-transform:uppercase}.feedback__dPY7Vk{border-radius:50%}.feedback__ePY7Vk{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.feedback__fPY7Vk{box-sizing:border-box;position:relative;transition-property:background-color,border-color,box-shadow;transition-duration:.25s;transition-timing-function:ease;color:#333;border:1px solid #ffdd2d;background-color:#ffdd2d}.feedback__fPY7Vk:hover{border-color:#fcc521;background-color:#fcc521}.feedback__fPY7Vk:active{border:1px solid #fab619;background-color:#fab619}.feedback__fPY7Vk:focus,.feedback__fPY7Vk:focus:hover,.feedback__fPY7Vk:focus:active{transition:none;outline:0;border-color:rgba(51,51,51,.48);box-shadow:inset 0 0 0 1px rgba(51,51,51,.48);background-clip:padding-box}.feedback__gPY7Vk{box-sizing:border-box;position:relative;transition-property:background-color,border-color,box-shadow;transition-duration:.25s;transition-timing-function:ease;color:#333;border:1px solid #ecf1f7;background-color:#ecf1f7;color:#1771e6}.feedback__gPY7Vk:hover{border-color:#e4ebf3;background-color:#e4ebf3}.feedback__gPY7Vk:active{border:1px solid #dde4ed;background-color:#dde4ed}.feedback__gPY7Vk:focus,.feedback__gPY7Vk:focus:hover,.feedback__gPY7Vk:focus:active{transition:none;outline:0;border-color:rgba(51,51,51,.48);box-shadow:inset 0 0 0 1px rgba(51,51,51,.48);background-clip:padding-box}.feedback__hPY7Vk{box-sizing:border-box;position:relative;transition-property:background-color;transition-duration:.25s;transition-timing-function:ease;color:#1771e6;border:1px solid #1771e6;background-color:transparent}.feedback__hPY7Vk:hover{border-color:#1464cc;background-color:rgba(23,113,230,.08)}.feedback__hPY7Vk:active{border:1px solid #0953b3;background-color:rgba(23,113,230,.16)}.feedback__hPY7Vk:focus,.feedback__hPY7Vk:focus:hover,.feedback__hPY7Vk:focus:active{transition:none;outline:0;border-color:rgba(51,51,51,.48);box-shadow:inset 0 0 0 1px rgba(51,51,51,.48);background-clip:padding-box}.feedback__iPY7Vk{box-sizing:border-box;position:relative;transition-property:background-color;transition-duration:.25s;transition-timing-function:ease;color:#fff;border:1px solid #fff;background-color:transparent}.feedback__iPY7Vk:hover{border-color:rgba(255,255,255,.64);background-color:rgba(255,255,255,.08)}.feedback__iPY7Vk:active{background-clip:padding-box;border:1px solid rgba(255,255,255,.64);background-color:rgba(255,255,255,.16)}.feedback__iPY7Vk:focus,.feedback__iPY7Vk:focus:hover,.feedback__iPY7Vk:focus:active{transition:none;outline:0;border-color:#fff;box-shadow:inset 0 0 0 1px #fff;background-clip:padding-box}.feedback__jPY7Vk{box-sizing:border-box;position:relative;transition-property:background-color;transition-duration:.25s;transition-timing-function:ease;color:#333;border:1px solid #333;background-color:transparent}.feedback__jPY7Vk:hover{border-color:#909090;background-color:rgba(51,51,51,.08)}.feedback__jPY7Vk:active{border:1px solid #909090;background-color:rgba(51,51,51,.16)}.feedback__jPY7Vk:focus,.feedback__jPY7Vk:focus:hover,.feedback__jPY7Vk:focus:active{transition:none;outline:0;border-color:rgba(51,51,51,.48);box-shadow:inset 0 0 0 1px rgba(51,51,51,.48);background-clip:padding-box}.feedback__kPY7Vk{border-color:transparent;background-color:transparent;color:#1771e6}.feedback__kPY7Vk:hover{border-color:#ecf1f7;background-color:#ecf1f7}.feedback__kPY7Vk:active{border-color:#e4ebf3;background-color:#e4ebf3}.feedback__kPY7Vk:focus{transition:none;outline:0;border-color:rgba(51,51,51,.48);box-shadow:inset 0 0 0 1px rgba(51,51,51,.48);background-clip:padding-box}.feedback__lPY7Vk{border-color:transparent;background-color:transparent;color:#fff}.feedback__lPY7Vk:hover{border-color:transparent;background-color:rgba(255,255,255,.16)}.feedback__lPY7Vk:active{border-color:transparent;background-color:rgba(255,255,255,.24)}.feedback__lPY7Vk:focus{border-color:#fff;box-shadow:inset 0 0 0 1px #fff}.feedback__mPY7Vk{border-color:transparent;background-color:transparent;color:#333}.feedback__mPY7Vk:hover{border-color:transparent;background-color:rgba(51,51,51,.08)}.feedback__mPY7Vk:active{border-color:transparent;background-color:rgba(51,51,51,.16)}.feedback__mPY7Vk:focus{border-color:rgba(51,51,51,.48);box-shadow:inset 0 0 0 1px rgba(51,51,51,.48)}.feedback__nPY7Vk{background-clip:content-box}.feedback__nPY7Vk::before{content:' ';position:absolute;top:-1px;right:-1px;bottom:-1px;left:-1px;z-index:0;border-radius:inherit;transition:background-color .3s ease;pointer-events:none}.feedback__nPY7Vk:hover::before{background-color:rgba(51,51,51,.24)}.feedback__nPY7Vk:active::before{background-color:rgba(51,51,51,.36)}.feedback__nPY7Vk:focus{border-color:rgba(51,51,51,.64)}.feedback__nPY7Vk .feedback__cPY7Vk{z-index:1}.feedback__oPY7Vk{opacity:.56;pointer-events:none}.feedback__pPY7Vk{flex-grow:1;margin-left:-1px}.feedback__pPY7Vk:first-child{margin-left:0}.feedback__qPY7Vk{margin-top:-1px;margin-left:0}.feedback__qPY7Vk:first-child{margin-top:0}.feedback__rPY7Vk:hover,.feedback__rPY7Vk:active,.feedback__rPY7Vk:focus{z-index:1}.feedback__sPY7Vk,.feedback__sPY7Vk:hover,.feedback__sPY7Vk:active{cursor:default}.feedback__tPY7Vk{width:100%}@media (min-width:600px){.feedback__uPY7Vk{width:100%}}@media (min-width:600px){.feedback__vPY7Vk{width:auto}}@media (min-width:768px){.feedback__wPY7Vk{width:100%}}@media (min-width:768px){.feedback__xPY7Vk{width:auto}}@media (min-width:1024px){.feedback__yPY7Vk{width:100%}}@media (min-width:1024px){.feedback__zPY7Vk{width:auto}}@media (min-width:1360px){.feedback__APY7Vk{width:100%}}@media (min-width:1360px){.feedback__BPY7Vk{width:auto}}@media (min-width:1600px){.feedback__CPY7Vk{width:100%}}@media (min-width:1600px){.feedback__DPY7Vk{width:auto}}.feedback__EPY7Vk{position:relative;display:flex;flex-direction:row;align-items:center;justify-content:center;box-sizing:border-box;font-family:haas,pragmatica,EllipsisFallback,Roboto,Helvetica,Arial,sans-serif;flex-grow:1}.feedback__EPY7Vk.feedback__FPY7Vk{min-width:auto}.feedback__GPY7Vk{padding:20px 39px 18px;min-height:58px;min-width:48px}.feedback__GPY7Vk .feedback__cPY7Vk{word-wrap:break-word;font-size:17px;line-height:24px;font-family:haas,pragmatica,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;font-weight:400;letter-spacing:0}.feedback__GPY7Vk.feedback__FPY7Vk{padding:17px}.feedback__HPY7Vk{padding:15px 35px 14px;min-height:54px;min-width:48px}.feedback__HPY7Vk.feedback__FPY7Vk{padding:15px}.feedback__IPY7Vk{padding:9px 23px 7px;min-height:42px;min-width:32px}.feedback__IPY7Vk.feedback__FPY7Vk{padding:9px}.feedback__JPY7Vk{padding:8px 11px 6px;min-height:30px;min-width:32px}.feedback__JPY7Vk .feedback__cPY7Vk{word-wrap:break-word;font-size:13px;line-height:16px;font-family:haas,pragmatica,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;font-weight:400;letter-spacing:0}.feedback__JPY7Vk.feedback__FPY7Vk{padding:3px}.feedback__KPY7Vk{margin:-5px 0 -3px -4px;width:24px}.feedback__KPY7Vk:only-child{margin:0}.feedback__cPY7Vk{word-wrap:break-word;font-size:15px;line-height:24px;font-family:haas,pragmatica,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;font-weight:400;letter-spacing:0}.feedback__cPY7Vk:empty{display:none}.feedback__KPY7Vk+.feedback__cPY7Vk{margin-right:-4px;margin-left:8px}.feedback__JPY7Vk .feedback__KPY7Vk+.feedback__cPY7Vk{margin-right:0;margin-left:0}.feedback__a28_WH{display:inline;outline:0;margin:0;padding:0;overflow:visible;border:0;background:0 0;font:inherit;text-decoration:none;cursor:pointer;text-align:inherit;text-transform:inherit}.feedback__a28_WH::-moz-focus-inner{border:0}.feedback__b28_WH .feedback__c28_WH{padding-bottom:.075em;border-bottom:1px dashed}.feedback__d28_WH{opacity:.56;pointer-events:none}.feedback__e28_WH,.feedback__e28_WH:visited{color:#1771e6}.feedback__e28_WH:hover{color:#1464cc}.feedback__e28_WH:active{color:#0953b3}.feedback__e28_WH:focus .feedback__c28_WH,.feedback__f28_WH:focus .feedback__c28_WH{background-color:#fef6e3}.feedback__g28_WH,.feedback__g28_WH:visited{color:rgba(255,255,255,.64)}.feedback__g28_WH:hover,.feedback__g28_WH:active{color:#fff}.feedback__g28_WH:focus .feedback__c28_WH{background-color:#fff;color:#333}.feedback__g28_WH.feedback__b28_WH,.feedback__g28_WH.feedback__b28_WH:visited{color:#fff}.feedback__g28_WH.feedback__b28_WH:hover,.feedback__g28_WH.feedback__b28_WH:active{color:rgba(255,255,255,.64)}.feedback__h28_WH,.feedback__h28_WH:visited{color:rgba(51,51,51,.64)}.feedback__h28_WH:hover,.feedback__h28_WH:active{color:#333}.feedback__h28_WH:focus .feedback__c28_WH{background-color:#333;color:#fff}.feedback__h28_WH.feedback__b28_WH,.feedback__h28_WH.feedback__b28_WH:visited{color:#333}.feedback__h28_WH.feedback__b28_WH:hover,.feedback__h28_WH.feedback__b28_WH:active{color:rgba(51,51,51,.64)}.feedback__c28_WH{padding:.15em 0}.feedback__a2qY4r{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);font:0/0 a}.feedback__b2qY4r{visibility:hidden}.feedback__afAppD .icon{transition:opacity .25s ease}.feedback__afAppD .icon__border{opacity:0}.feedback__afAppD .icon__stroke{fill:none;stroke:currentColor;stroke-linejoin:round;stroke-linecap:round;stroke-miterlimit:10}.feedback__afAppD .icon__stroke_fill_currentColor{fill:currentColor}.feedback__afAppD .icon__fill{stroke:none;fill:currentColor}.feedback__afAppD .icon__fill-bg{fill:#fff}.feedback__afAppD .icon__active-shown{opacity:0;transition:opacity .25s ease}.feedback__afAppD{display:inline-block;max-width:100%;max-height:100%;width:100%;height:100%;border-radius:50%}.feedback__afAppD svg{vertical-align:top}.feedback__afAppD .icon__stroke:not(.icon__stroke_non-scaling){stroke-width:2.5px}.feedback__bfAppD{vertical-align:top}.feedback__cfAppD{vertical-align:middle}.feedback__dfAppD{vertical-align:bottom}.feedback__efAppD .icon__border{opacity:1}.feedback__ffAppD .icon__active-shown{opacity:1}.feedback__gfAppD{color:currentColor}.feedback__hfAppD{width:48px;height:48px}.feedback__ifAppD{color:#fff;background-color:#22a053}.feedback__ifAppD .icon__border{opacity:0}.feedback__jfAppD{color:#3e4757;background-color:#eef2f7}.feedback__jfAppD .icon__border{opacity:0}.feedback__kfAppD{color:#333;background-color:#dddfe0}.feedback__kfAppD .icon__border{opacity:0}.feedback__lfAppD{color:#3e4757;background-color:#ffdd2d}.feedback__lfAppD .icon__border{opacity:0}.feedback__mfAppD{color:#3e4757;background-color:#74b9d7}.feedback__mfAppD .icon__border{opacity:0}.feedback__nfAppD{color:#7f8389;background-color:#f4f4f5}.feedback__nfAppD .icon__border{opacity:0}.feedback__ofAppD{color:#333;background-color:#eef2f7}.feedback__ofAppD .icon__border{opacity:0}.feedback__pfAppD{color:#333;background-color:#fff}.feedback__pfAppD .icon__border{opacity:0}.feedback__qfAppD{color:#333;background-image:linear-gradient(to bottom,#fce4a0,#d3c08d)}.feedback__qfAppD .icon__border{opacity:0}.feedback__rfAppD{color:#fff}.feedback__sfAppD{color:#333}.feedback__tfAppD{color:#74a3c7}.feedback__ufAppD{color:#5b8db3}.feedback__vfAppD{color:#9299a2}.feedback__wfAppD{color:#dddfe0}.feedback__xfAppD{color:#ffdd2d}.feedback__yfAppD{color:#d23c3c}.feedback__zfAppD{color:#22a053}.feedback__AfAppD{color:currentColor}.feedback__BfAppD{width:12px;height:12px}.feedback__CfAppD{width:14px;height:14px}.feedback__DfAppD{width:18px;height:18px}.feedback__EfAppD{width:20px;height:20px}.feedback__FfAppD{width:24px;height:24px}.feedback__GfAppD{width:30px;height:30px}.feedback__HfAppD{width:32px;height:32px}.feedback__IfAppD{width:36px;height:36px}.feedback__JfAppD{width:42px;height:42px}.feedback__JfAppD .icon__stroke:not(.icon__stroke_non-scaling){stroke-width:2px}.feedback__hfAppD{width:48px;height:48px}.feedback__KfAppD{width:60px;height:60px}.feedback__LfAppD{width:66px;height:66px}.feedback__LfAppD .icon__stroke:not(.icon__stroke_non-scaling){stroke-width:2.72727px}.feedback__MfAppD{width:72px;height:72px}.feedback__NfAppD{width:78px;height:78px}.feedback__OfAppD{width:84px;height:84px}.feedback__PfAppD{width:90px;height:90px}.feedback__QfAppD{width:102px;height:102px}.feedback__RfAppD{width:108px;height:108px}.feedback__SfAppD{width:120px;height:120px}.feedback__SfAppD .icon__stroke:not(.icon__stroke_non-scaling){stroke-width:1.6667px}.feedback__TfAppD{width:138px;height:138px}.feedback__UfAppD{width:174px;height:174px}.feedback__VfAppD{width:198px;height:198px}.feedback__a3z-VL{width:60px;height:60px;background-image:url(https://www.cdn-tinkoff.ru/frontend-libraries/feedback/1.21.0/796446363b53b34c88a722f91dd1867c.svg)}:root{--color-telegram: #3eafdd;--color-whatsapp: #22a053;--background-whatsapp: #00d45d;--color-viber: #7b519c;--mess-font-text: tuiText, -apple-system, 'BlinkMacSystemFont', system-ui, 'Roboto', 'Segoe UI', 'Helvetica Neue', sans-serif;--mess-font-text-s: normal 0.8125rem/1.25rem var(--mess-font-text)}.feedback__a3L5AL{position:fixed;right:0;bottom:0;z-index:2000;transition:all .3s ease}.feedback__b3L5AL .feedback__c3L5AL,.feedback__b3L5AL .feedback__d3L5AL{transform:translate(5px,-60px)}@media (min-width:768px){.feedback__b3L5AL .feedback__e3L5AL{transform:translate(5px,-60px)}}.feedback__c3L5AL{position:fixed;right:30px;bottom:30px;z-index:2000}.feedback__d3L5AL{position:fixed;right:30px;bottom:78px;z-index:1999;margin-bottom:18px;visibility:hidden}.feedback__f3L5AL{visibility:visible}.feedback__g3L5AL{position:absolute;right:70px;top:10px;padding:11px 15px;border-radius:100px;background-color:rgba(238,242,247,.8);transition:all .3s cubic-bezier(.25,0,.25,1);transition-property:opacity,transform;opacity:0;transform:translate3d(15px,0,0);letter-spacing:1px;text-transform:uppercase;font-size:11px;font-weight:500}.feedback__h3L5AL{position:absolute;right:0;bottom:0;border-radius:50%;cursor:pointer}.feedback__i3L5AL{position:relative;z-index:100;border-radius:50%;box-shadow:0 10px 25px 0 rgba(0,0,0,.1);background-color:#ffdd2d;background-color:var(--feedback-button-color, #ffdd2d);cursor:pointer;transform:translate3d(0,0,0);will-change:transform;opacity:1;transition:all 200ms cubic-bezier(.25,0,.25,1);transition-property:transform,opacity,background-color}.feedback__i3L5AL:hover{background-color:#ffcd33;background-color:var(--feedback-button-color-hover, #ffcd33)}.feedback__j3L5AL{transform:scale(.3);opacity:0;z-index:0}.feedback__k3L5AL{position:absolute;top:-3px;right:-4px;width:24px;height:24px;border-radius:50%;text-align:center;color:#fff;background-color:#e31c1c;font:.8125rem/1.25rem tuiText,-apple-system,'BlinkMacSystemFont',system-ui,'Roboto','Segoe UI','Helvetica Neue',sans-serif;font:var(--mess-font-text-s);font-size:13px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer}.feedback__l3L5AL{margin:4px 0}.feedback__m3L5AL{position:relative;z-index:0;opacity:0;border-radius:50%;cursor:pointer;box-shadow:0 10px 25px 0 rgba(0,0,0,.1);background-color:#ffdd2d;background-color:var(--feedback-button-color, #ffdd2d);pointer-events:none;transition:all 150ms cubic-bezier(.25,0,.25,1);transition-property:opacity,background-color}.feedback__m3L5AL:hover{background-color:#ffcd33;background-color:var(--feedback-button-color-hover, #ffcd33)}.feedback__n3L5AL{opacity:1;pointer-events:visible;z-index:101}.feedback__o3L5AL{transform:rotate(0deg);transition:transform 150ms cubic-bezier(.25,0,.25,1)}.feedback__p3L5AL{transform:rotate(90deg)}.feedback__q3L5AL{cursor:pointer;opacity:0;margin-bottom:-60px;border-radius:50%;transform:translate3d(0,0,0);will-change:transform;transition:transform 300ms cubic-bezier(.25,0,.25,1)}.feedback__q3L5AL:hover{transform:translateX(3px);transition:transform 300ms cubic-bezier(.25,0,.25,1)}.feedback__q3L5AL:hover .feedback__g3L5AL{opacity:1;transform:translate3d(0,0,0)}.feedback__r3L5AL{opacity:1;-webkit-animation:feedback__s3L5AL .35s cubic-bezier(.25,0,.25,1) forwards;animation:feedback__s3L5AL .35s cubic-bezier(.25,0,.25,1) forwards}.feedback__r3L5AL:nth-last-of-type(1){-webkit-animation-delay:.05s;animation-delay:.05s}.feedback__r3L5AL:nth-last-of-type(2){-webkit-animation-delay:.1s;animation-delay:.1s}.feedback__r3L5AL:nth-last-of-type(3){-webkit-animation-delay:.15s;animation-delay:.15s}.feedback__r3L5AL:nth-last-of-type(4){-webkit-animation-delay:.2s;animation-delay:.2s}.feedback__t3L5AL{opacity:0;-webkit-animation:feedback__u3L5AL .15s cubic-bezier(.25,0,.25,1);animation:feedback__u3L5AL .15s cubic-bezier(.25,0,.25,1)}.feedback__t3L5AL:nth-of-type(n){-webkit-animation-delay:0s;animation-delay:0s}.feedback__v3L5AL{transition:transform .35s cubic-bezier(.25,0,.25,1)}.feedback__w3L5AL{background-color:#7b519c;background-color:var(--color-viber)}.feedback__x3L5AL{background-color:#00d45d;background-color:var(--background-whatsapp)}@media (min-width:600px){.feedback__e3L5AL{position:fixed;right:30px;bottom:92px;z-index:2000}}@-webkit-keyframes feedback__s3L5AL{0%{opacity:.3;margin-bottom:-60px}50%{margin-bottom:22px;opacity:.8}60%{margin-bottom:10px}80%{margin-bottom:8px;opacity:1}to{margin-bottom:12px;opacity:1}}@keyframes feedback__s3L5AL{0%{opacity:.3;margin-bottom:-60px}50%{margin-bottom:22px;opacity:.8}60%{margin-bottom:10px}80%{margin-bottom:8px;opacity:1}to{margin-bottom:12px;opacity:1}}@-webkit-keyframes feedback__u3L5AL{0%{opacity:1;margin-bottom:12px}to{margin-bottom:-60px;opacity:.3}}@keyframes feedback__u3L5AL{0%{opacity:1;margin-bottom:12px}to{margin-bottom:-60px;opacity:.3}}
	</style>
	<link data-href="https://www.cdn-tinkoff.ru/frontend-libraries/feedback/1.21.0/feedback.css" rel="stylesheet">
	<link data-critical="true" rel="stylesheet" href="https://www.cdn-tinkoff.ru/frontend-libraries/header/1.49.1/header.css">
	<style type="text/css">
	:root{--tds-color-text-03:rgba(0,0,0,.4);--tds-color-text-01:rgba(0,0,0,.8);--tds-color-warning-bg:rgba(250,182,25,.12);--tds-color-link:#336fee;--tds-color-link-hover:#1f50ba;--tds-color-neutral-bg:rgba(121,129,140,.12);--tds-color-warning-fill:#fab619;--tds-color-success-fill:#00b92d;--tds-color-error-fill:#f52222;--tds-color-neutral-fill:#79818c;--tds-color-info-fill:#428bf9;--tds-color-base-06:#9299a2;--tds-color-base-01:#fff;--tds-color-focus:rgba(51, 51, 51, 0.48);--tds-color-secondary:#ecf1f7;--tds-color-base-09:#000;--tds-color-base-03:#eaecee;--tds-color-base-04:#dddfe0;--tds-color-primary:#ffdd2d;--tds-color-primary-text:rgba(0,0,0,.8);--tds-color-accent:#428bf9;--tds-color-success-bg:rgba(0,185,45,.12);--tds-color-error-bg:rgba(224,31,25,.12);--tds-color-info-bg:rgba(66,139,249,.12);--tds-color-secondary-hover:#e4ebf3;--tds-color-primary-hover:#fcc521;--tds-color-text-negative-hover:#a00707;--tds-color-text-positive-hover:#00701b;--tds-color-base-07:#5c636b;--tds-color-success-bg-hover:rgba(0,185,45,.24);--tds-color-warning-bg-hover:rgba(250,182,25,.24);--tds-color-error-bg-hover:rgba(224,31,25,.16);--tds-color-neutral-bg-hover:rgba(121,129,140,.24);--tds-color-info-bg-hover:rgba(66,139,249,.24);--tds-color-base-02:#f6f7f8;--tds-color-base-08:#333;--tds-color-text-02:rgba(0,0,0,.54);--tds-color-base-05:#c7c9cc}[data-tds-theme=dark]{--tds-color-text-03:rgba(255,255,255,.5);--tds-color-text-01:rgba(255, 255, 255, .88);--tds-color-warning-bg:rgba(250,182,25,.28);--tds-color-link:#3d91ff;--tds-color-link-hover:#71afff;--tds-color-neutral-bg:rgba(149,155,164,.32);--tds-color-warning-fill:#fab619;--tds-color-success-fill:#10d952;--tds-color-error-fill:#fb4040;--tds-color-neutral-fill:#959ba4;--tds-color-info-fill:#428bf9;--tds-color-base-06:#c7c9cc;--tds-color-base-01:#121212;--tds-color-focus:rgba(51, 51, 51, 0.48);--tds-color-secondary:rgba(255,255,255,.1);--tds-color-base-09:#fff;--tds-color-base-03:#232325;--tds-color-base-04:#2c2c2e;--tds-color-primary:#ffdd2d;--tds-color-primary-text:rgba(0,0,0,.8);--tds-color-accent:#428bf9;--tds-color-success-bg:rgba(16,217,82,.28);--tds-color-error-bg:rgba(251,64,64,.28);--tds-color-info-bg:rgba(66,139,249,.28);--tds-color-secondary-hover:rgba(255,255,255,.16);--tds-color-primary-hover:#fcc521;--tds-color-text-negative-hover:#e31c1c;--tds-color-text-positive-hover:#00a127;--tds-color-base-07:#dddfe0;--tds-color-success-bg-hover:rgba(16,217,82,.48);--tds-color-warning-bg-hover:rgba(250,182,25,.48);--tds-color-error-bg-hover:rgba(251,64,64,.48);--tds-color-neutral-bg-hover:rgba(149,155,164,.48);--tds-color-info-bg-hover:rgba(66,139,249,.48);--tds-color-base-02:#191919;--tds-color-base-08:#f6f7f8;--tds-color-text-02:rgba(255,255,255,.72);--tds-color-base-05:#5c636b}.footer__a9-\+c8m{margin-bottom:8px}.footer__ag8PKV{margin-right:var(--gaps-main-negative);margin-bottom:var(--gaps-cross-negative)}.footer__bg8PKV{display:flex;justify-content:stretch}.footer__bg8PKV .footer__ag8PKV{display:flex;flex-wrap:wrap;width:100%;max-width:100%;flex-grow:1}.footer__cg8PKV .footer__ag8PKV{flex-direction:row}.footer__cg8PKV .footer__ag8PKV>*{margin-right:var(--gaps-main);margin-bottom:var(--gaps-cross)}.footer__dg8PKV .footer__ag8PKV{flex-direction:column}.footer__dg8PKV .footer__ag8PKV>*{margin-bottom:var(--gaps-main);margin-right:var(--gaps-cross)}.footer__eg8PKV .footer__ag8PKV{justify-content:flex-start}.footer__fg8PKV .footer__ag8PKV{justify-content:center}.footer__gg8PKV .footer__ag8PKV{justify-content:flex-end}.footer__hg8PKV .footer__ag8PKV{justify-content:space-between}.footer__ig8PKV .footer__ag8PKV{justify-content:space-around}.footer__jg8PKV .footer__ag8PKV{justify-content:space-evenly}.footer__kg8PKV .footer__ag8PKV{align-items:flex-start;align-content:flex-start}.footer__lg8PKV .footer__ag8PKV{align-items:center;align-content:center}.footer__mg8PKV .footer__ag8PKV{align-items:flex-end;align-content:flex-end}.footer__ng8PKV .footer__ag8PKV{align-items:stretch}.footer__aZ2dAc{--tds-component--link--color--default:var(--tds-color-text-03);--tds-component--link--color--hover:var(--tds-color-text-01);--tds-component--link--color--focus:var(--tds-color-text-03);--tds-component--link--background-color--focus:var(--tds-color-warning-bg);font-feature-settings:normal}.footer__bZ2dAc{display:flex;flex-direction:row;align-items:center;background:inherit}.footer__bZ2dAc>:not(:last-child):not(:only-child){margin-right:8px}.footer__cZ2dAc{font:400 13px/20px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0}.footer__aUabtl{display:inline;outline:0;margin:0;padding:0;overflow:visible;border:0;background:0 0;font:inherit;text-decoration:none;cursor:pointer;text-align:inherit;text-transform:inherit;color:inherit}.footer__aUabtl::-moz-focus-inner{border:0}.footer__bUabtl{opacity:.56;pointer-events:none}.footer__cUabtl,.footer__cUabtl:visited{color:var(--tds-color-link)}.footer__cUabtl:hover,.footer__cUabtl:active{color:var(--tds-color-link-hover)}.footer__dUabtl,.footer__dUabtl:visited{color:rgba(255,255,255,.64)}.footer__dUabtl:hover,.footer__dUabtl:active{color:#fff}.footer__dUabtl.footer__eUabtl,.footer__dUabtl.footer__eUabtl:visited{color:#fff}.footer__dUabtl.footer__eUabtl:hover,.footer__dUabtl.footer__eUabtl:active{color:rgba(255,255,255,.64)}.footer__fUabtl,.footer__fUabtl:visited{color:rgba(51,51,51,.64)}.footer__fUabtl:hover,.footer__fUabtl:active{color:#333}.footer__fUabtl.footer__eUabtl,.footer__fUabtl.footer__eUabtl:visited{color:#333}.footer__fUabtl.footer__eUabtl:hover,.footer__fUabtl.footer__eUabtl:active{color:rgba(51,51,51,.64)}.footer__gUabtl,.footer__gUabtl:visited{color:var(--tds-component--link--color--default)}.footer__gUabtl:hover,.footer__gUabtl:active{color:var(--tds-component--link--color--hover)}.footer__gUabtl:focus{color:var(--tds-component--link--color--focus)}.footer__eUabtl .footer__hUabtl{border-bottom:.07em dashed}@supports (text-decoration-thickness:auto){.footer__eUabtl .footer__hUabtl{border-bottom:none;-webkit-text-decoration:underline dashed;text-decoration:underline dashed;text-underline-offset:.2em;text-decoration-thickness:.7px}}.footer__gUabtl .footer__hUabtl,.footer__gUabtl:visited .footer__hUabtl{background-color:var(--tds-component--link--background-color--default)}.footer__cUabtl:focus .footer__hUabtl{background-color:var(--tds-color-warning-bg)}.footer__dUabtl:focus .footer__hUabtl{background-color:#fff;color:#333}.footer__fUabtl:focus .footer__hUabtl{background-color:#333;color:#fff}.footer__gUabtl:hover .footer__hUabtl,.footer__gUabtl:active .footer__hUabtl{background-color:var(--tds-component--link--background-color--hover)}.footer__gUabtl:focus .footer__hUabtl{background-color:var(--tds-component--link--background-color--focus)}.footer__aeHJTF{position:relative;display:inline-flex;align-items:center;border-radius:inherit}.footer__beHJTF{display:inline-block;border-radius:50%;background-color:var(--tds-color-neutral-bg)}.footer__ceHJTF{background-color:var(--tds-color-warning-fill)}.footer__deHJTF{background-color:var(--tds-color-success-fill)}.footer__eeHJTF{background-color:var(--tds-color-error-fill)}.footer__feHJTF{background-color:var(--tds-color-success-fill)}.footer__geHJTF{background-color:var(--tds-color-warning-fill)}.footer__heHJTF{background-color:var(--tds-color-error-fill)}.footer__ieHJTF{background-color:var(--tds-color-neutral-fill)}.footer__jeHJTF{background-color:var(--tds-color-info-fill)}.footer__keHJTF{position:relative;box-sizing:border-box;display:inline-flex;align-items:stretch;font-size:0;line-height:0;outline:0;background-color:var(--tds-color-base-06);color:var(--tds-color-base-01);text-align:left;text-decoration:none;transition:background-color .2s ease,border-color .2s ease;flex-shrink:0}.footer__keHJTF::before,.footer__keHJTF::after{position:absolute;top:0;right:0;bottom:0;left:0;border:2px solid transparent;pointer-events:none;border-radius:inherit}.footer__keHJTF:focus::after{content:'';border-color:var(--tds-color-focus)}.footer__leHJTF{min-width:16px;height:16px;border-radius:16px}.footer__leHJTF .footer__aeHJTF{font:400 11px/16px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:.4px}.footer__leHJTF .footer__beHJTF{margin-right:6px;width:4px;height:4px}.footer__meHJTF{min-width:20px;height:20px;border-radius:20px}.footer__meHJTF .footer__aeHJTF{font:400 11px/16px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:.4px}.footer__meHJTF .footer__beHJTF{margin-right:6px;width:4px;height:4px}.footer__neHJTF{min-width:24px;height:24px;border-radius:24px}.footer__neHJTF .footer__beHJTF{margin-right:7px;width:6px;height:6px}.footer__oeHJTF{min-width:32px;height:32px;border-radius:32px}.footer__oeHJTF .footer__beHJTF{margin-right:8px;width:8px;height:8px}.footer__peHJTF{min-width:40px;height:40px;border-radius:40px}.footer__peHJTF .footer__beHJTF{margin-right:8px;width:8px;height:8px}.footer__neHJTF .footer__aeHJTF,.footer__oeHJTF .footer__aeHJTF,.footer__peHJTF .footer__aeHJTF{font:400 13px/20px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0}.footer__qeHJTF{background-color:var(--tds-color-secondary);color:var(--tds-color-base-09)}.footer__reHJTF{background-color:var(--tds-color-base-03);color:var(--tds-color-base-09)}.footer__seHJTF{background-color:var(--tds-color-base-01);color:var(--tds-color-base-09)}.footer__teHJTF{border:1px solid var(--tds-color-base-04);background-color:var(--tds-color-base-01);color:var(--tds-color-base-09)}.footer__ueHJTF{background-color:var(--tds-color-primary);color:var(--tds-color-primary-text)}.footer__veHJTF{background-color:var(--tds-color-error-fill);color:var(--tds-color-base-01)}.footer__weHJTF{background-color:var(--tds-color-success-fill);color:var(--tds-color-base-01)}.footer__xeHJTF{background-color:var(--tds-color-accent);color:var(--tds-color-base-01)}.footer__yeHJTF{background-color:rgba(255,255,255,.64);color:#333}.footer__zeHJTF{background-color:rgba(51,51,51,.64);color:#fff}.footer__AeHJTF{background-color:var(--tds-color-base-01);color:var(--tds-color-base-09)}.footer__AeHJTF::before{content:'';border:2px solid var(--tds-color-primary);transition:border-color .2s ease}.footer__seHJTF::before,.footer__BeHJTF::before{content:'';background-color:var(--tds-color-base-09);opacity:0;transition:opacity .2s ease,background-color .2s ease}.footer__CeHJTF{color:var(--tds-color-base-01);background-color:var(--tds-color-base-06)}.footer__DeHJTF{color:var(--tds-color-primary-text);background-color:var(--tds-color-primary)}.footer__EeHJTF{color:var(--tds-color-text-01);background-color:var(--tds-color-success-bg)}.footer__FeHJTF{color:var(--tds-color-text-01);background-color:var(--tds-color-warning-bg)}.footer__GeHJTF{color:var(--tds-color-text-01);background-color:var(--tds-color-error-bg)}.footer__HeHJTF{color:var(--tds-color-text-01);background-color:var(--tds-color-neutral-bg)}.footer__IeHJTF{color:var(--tds-color-text-01);background-color:var(--tds-color-info-bg)}.footer__JeHJTF{cursor:pointer}.footer__JeHJTF:hover::before{content:''}.footer__JeHJTF:hover.footer__qeHJTF{background-color:var(--tds-color-secondary-hover)}.footer__JeHJTF:hover.footer__reHJTF{background-color:var(--tds-color-base-04)}.footer__JeHJTF:hover.footer__seHJTF{background-color:var(--tds-color-base-01)}.footer__JeHJTF:hover.footer__teHJTF{border:1px solid var(--tds-color-base-04);background-color:var(--tds-color-base-01)}.footer__JeHJTF:hover.footer__ueHJTF{background-color:var(--tds-color-primary-hover)}.footer__JeHJTF:hover.footer__veHJTF{background-color:var(--tds-color-text-negative-hover)}.footer__JeHJTF:hover.footer__weHJTF{background-color:var(--tds-color-text-positive-hover)}.footer__JeHJTF:hover.footer__xeHJTF{background-color:var(--tds-color-link-hover)}.footer__JeHJTF:hover.footer__yeHJTF{background-color:#fff}.footer__JeHJTF:hover.footer__zeHJTF{background-color:#333}.footer__JeHJTF:hover.footer__AeHJTF{background-color:var(--tds-color-base-01)}.footer__JeHJTF:hover.footer__AeHJTF::before{border-color:var(--tds-color-primary-hover)}.footer__JeHJTF:hover.footer__CeHJTF{background-color:var(--tds-color-base-07)}.footer__JeHJTF:hover.footer__DeHJTF{background-color:var(--tds-color-primary-hover)}.footer__JeHJTF:hover.footer__EeHJTF{background-color:var(--tds-color-success-bg-hover)}.footer__JeHJTF:hover.footer__FeHJTF{background-color:var(--tds-color-warning-bg-hover)}.footer__JeHJTF:hover.footer__GeHJTF{background-color:var(--tds-color-error-bg-hover)}.footer__JeHJTF:hover.footer__HeHJTF{background-color:var(--tds-color-neutral-bg-hover)}.footer__JeHJTF:hover.footer__IeHJTF{background-color:var(--tds-color-info-bg-hover)}.footer__JeHJTF.footer__seHJTF:hover::before,.footer__JeHJTF.footer__BeHJTF:hover::before{opacity:.08}.footer__KeHJTF{display:inline-flex;height:100%;align-items:center}.footer__LeHJTF{height:100%}.footer__a--e5dX{margin:0 auto;padding-top:128px}.footer__b--e5dX{white-space:nowrap}.footer__a4ZFfS{padding:0 16px}.footer__b4ZFfS:not(.footer__c4ZFfS).footer__b4ZFfS:not(.footer__d4ZFfS),.footer__d4ZFfS:not(.footer__c4ZFfS):not(.footer__a4ZFfS){margin:0 auto;width:824px}@media (min-width:1360px){.footer__b4ZFfS:not(.footer__c4ZFfS).footer__b4ZFfS:not(.footer__d4ZFfS){width:1104px}}@media (min-width:1280px){.footer__d4ZFfS:not(.footer__c4ZFfS):not(.footer__a4ZFfS){width:1104px}}.footer__a3jOG5{padding:0 16px}.footer__b3jOG5:not(.footer__a3jOG5){min-width:824px}.footer__c3jOG5:not(.footer__b3jOG5){width:824px;margin:0 auto}@media (min-width:1360px){.footer__c3jOG5:not(.footer__b3jOG5){width:1104px}}.footer__aLN3Uc{height:1px;box-shadow:inset 0 1px 0 rgba(221,223,224,.5)}.footer__aXxZKk{background-color:var(--tds-color-base-01)}.footer__bXxZKk{background-color:var(--tds-color-base-02)}.footer__au8iH5{display:flex;flex-direction:column}.footer__bu8iH5{align-items:center}.footer__cu8iH5{align-items:stretch}.footer__du8iH5{display:flex;flex-direction:row}.footer__eu8iH5{justify-content:space-between}.footer__fu8iH5{align-items:center}.footer__gu8iH5>:not(:last-child):not(:only-child){margin-bottom:8px}.footer__hu8iH5>:not(:last-child):not(:only-child){margin-bottom:16px}.footer__iu8iH5>:not(:last-child):not(:only-child){margin-bottom:24px}.footer__ju8iH5>:not(:last-child):not(:only-child){margin-right:24px}.footer__aSgpgb{color:var(--tds-color-text-03);font:400 13px/20px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0}.footer__aSgpgb a{display:inline;outline:0;margin:0;padding:0;overflow:visible;border:0;background:0 0;font:inherit;text-decoration:none;cursor:pointer;text-align:inherit;text-transform:inherit}.footer__aSgpgb a::-moz-focus-inner{border:0}.footer__aSgpgb a,.footer__aSgpgb a:visited{color:var(--tds-color-text-03)}.footer__aSgpgb a:hover,.footer__aSgpgb a:active{color:var(--tds-color-text-01)}.footer__aSgpgb a:focus{color:var(--tds-color-text-03);background-color:var(--tds-color-warning-bg)}.footer__av8AXe{background-color:#000}.footer__aQ9Jt0{background-color:var(--tds-color-base-04)}.footer__a7ZtCk{display:flex;height:100%}.footer__b7ZtCk{flex-direction:row}.footer__b7ZtCk.footer__c7ZtCk>:not(:last-child):not(:only-child){margin-right:var(--gaps)}.footer__d7ZtCk{flex-direction:column}.footer__d7ZtCk.footer__c7ZtCk>:not(:last-child):not(:only-child){margin-bottom:var(--gaps)}.footer__e7ZtCk{flex-direction:row-reverse}.footer__e7ZtCk.footer__c7ZtCk>:not(:last-child):not(:only-child){margin-right:var(--gaps)}.footer__f7ZtCk{flex-direction:column-reverse}.footer__f7ZtCk.footer__c7ZtCk>:not(:last-child):not(:only-child){margin-bottom:var(--gaps)}.footer__g7ZtCk{justify-content:flex-start}.footer__h7ZtCk{justify-content:center}.footer__i7ZtCk{justify-content:flex-end}.footer__j7ZtCk{justify-content:space-between}.footer__k7ZtCk{justify-content:space-around}.footer__l7ZtCk{justify-content:space-evenly}.footer__m7ZtCk{align-items:flex-start}.footer__n7ZtCk{align-items:center}.footer__o7ZtCk{align-items:flex-end}.footer__p7ZtCk{align-items:stretch}.footer__aAqc6G{color:var(--tds-color-base-09)}.footer__bAqc6G{color:#000}.footer__cAqc6G{color:#fff}.footer__aX4jau{display:flex;flex-direction:column}.footer__bX4jau{align-items:flex-start}.footer__cX4jau{align-items:center}.footer__dX4jau{align-items:flex-end}.footer__eX4jau{align-items:stretch}.footer__fX4jau>:not(:last-child):not(:only-child){margin-bottom:4px}.footer__gX4jau{text-decoration:none;color:var(--tds-color-base-08);font:500 24px/28px dsHeading,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0;font-variant-ligatures:no-contextual}.footer__hX4jau{color:var(--tds-color-text-03);font:400 11px/16px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:.4px}.footer__iX4jau{font:400 13px/20px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0}.footer__adB7ko{--tds-component--link--color--default:var(--tds-color-text-03);--tds-component--link--color--hover:var(--tds-color-text-01);--tds-component--link--color--focus:var(--tds-color-text-03);--tds-component--link--background-color--focus:var(--tds-color-warning-bg);display:flex;flex-direction:row;justify-content:flex-start;align-items:flex-start}.footer__adB7ko>:not(:last-child):not(:only-child){margin-right:16px}.footer__aAn0H-\+{display:flex;flex-direction:column;flex:1 1 0;overflow:hidden}.footer__aAn0H-\+>:not(:last-child):not(:only-child){margin-bottom:40px}.footer__acds7G>:not(:last-child):not(:only-child){margin-bottom:24px}.footer__bcds7G{display:flex;flex-direction:column}.footer__bcds7G>:not(:last-child):not(:only-child){margin-bottom:12px}.footer__ccds7G{--tds-component--link--color--default:var(--tds-color-text-02);--tds-component--link--color--hover:var(--tds-color-text-01);--tds-component--link--color--focus:var(--tds-color-text-02);--tds-component--link--background-color--focus:var(--tds-color-warning-bg)}.footer__a2SZU1{display:flex;flex-direction:row;align-items:center;background:inherit}.footer__a2SZU1>:not(:last-child):not(:only-child){margin-right:4px}.footer__b2SZU1{font:500 20px/24px dsHeading,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0;font-variant-ligatures:no-contextual}.footer__ajpU48{max-width:100%}.footer__bjpU48{max-width:100%;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.footer__aYqS1O{position:relative;display:inline-flex;align-items:center;justify-content:center;vertical-align:top}.footer__bYqS1O{width:var(--tds-icon-container-size);height:var(--tds-icon-container-size)}.footer__cYqS1O{position:absolute;margin:auto;border-radius:50%;width:var(--tds-icon-background-size, 100%);height:var(--tds-icon-background-size, 100%)}.footer__dYqS1O{position:relative;display:inline-flex;justify-content:center;width:var(--tds-icon-size, 64px);height:var(--tds-icon-size, 64px)}.footer__dYqS1O svg{width:100%;height:100%;align-self:center}.footer__eYqS1O{display:inline-flex;max-width:100%;max-height:100%}.footer__aWMw--0{display:flex;flex-direction:row;align-items:center;background:inherit}.footer__aWMw--0>:not(:last-child):not(:only-child){margin-right:8px}.footer__bWMw--0{font:400 13px/20px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0}.footer__ahEvWr{--tds-component--link--color--default:var(--tds-color-text-03);--tds-component--link--color--hover:var(--tds-color-text-01);--tds-component--link--color--focus:var(--tds-color-text-03);--tds-component--link--background-color--focus:var(--tds-color-warning-bg);display:flex;flex-direction:row}.footer__ahEvWr>:not(:last-child):not(:only-child){margin-right:16px}.footer__bhEvWr>:not(:last-child):not(:only-child){margin-right:12px}.footer__aK3DTU{display:block;background:inherit}.footer__bK3DTU{padding:4px;background:var(--tds-color-base-02);border-radius:50%}.footer__aZ1qfb{--tds-component--link--color--default:var(--tds-color-text-03);--tds-component--link--color--hover:var(--tds-color-text-01);--tds-component--link--color--focus:var(--tds-color-text-03);--tds-component--link--background-color--focus:var(--tds-color-warning-bg)}.footer__bZ1qfb{display:flex;flex-direction:row;align-items:center;background:inherit}.footer__bZ1qfb>:not(:last-child):not(:only-child){margin-right:8px}.footer__cZ1qfb{font:400 13px/20px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0}.footer__a1AuGU{margin:0 auto;padding-top:32px}.footer__aypMp4{--tds-component--link--color--default:var(--tds-color-text-02);--tds-component--link--color--hover:var(--tds-color-text-01)}.footer__ayXzjA{position:relative;width:100%}.footer__a6XJyZ{padding-left:16px}.footer__b6XJyZ{color:var(--tds-color-base-05);transform:rotate(0);transition:transform .25s ease}.footer__c6XJyZ{transform:rotate(180deg)}.footer__d6XJyZ{display:flex;flex-direction:row;justify-content:space-between;padding:16px 16px 16px 0;color:var(--tds-color-text-01)}.footer__d6XJyZ>:not(:last-child):not(:only-child){margin-right:16px}.footer__e6XJyZ{font:400 15px/24px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0}.footer__aO--A7P{display:block;padding:12px 16px 12px 32px;font:400 13px/20px dsText,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;letter-spacing:0}@media not screen and (min-width:1024px){.footer__aK7Uxc{display:none}}@media (min-width:1024px){.footer__bK7Uxc{display:none}}.footer__a1t1VR{display:block;width:18px;height:18px;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAMAAABhEH5lAAAAnFBMVEUAAAAAbaoDZaUAAP8AaKIAaKgAaanoa2P9///3cWF2qsh6qsmFutmDqMSEqcblbGPpbWMAX6aFu9mFvNp+qskAaK72XUxqoMMAZ6fsWEr2mpH///9qo8f9XkztWUr/9/bU3ufSzteBt9V2stNupsqAq8j6y8d1psZnnsEAcrIAba33kYf3c2X2cWPubmLsXlDpRjb5///8pJv+o5stUuLiAAAAFnRSTlMAsCkBFvXzm3FwSUv4+PagnxX39ksWQkJRzwAAANlJREFUGNNFkNmygjAQRBOCguv1uoTMJIRNZBVc/v/fDIkW/dR1qnpquonT5Xw4bHwyy6PLaxxfl9RjXxIeWxFxHolmv3Jk9Za5Q2X/Cm1q16Msas5VdUe59QhhtCmNTUFnA8q8pYz4CyGqARMYO3wWQiz+yVpFkcq6G8AtSWvj1+Qv5pzrER4PAG1sHHwRTGh0yAbrNJmCXaamoD1fPLEbIcGhsucZbXOJQ6Z1KvFeNpSZV7fGVorzupDY7zxb8dWXrlAu37+S+8ah9hQSJzaPQ2b5myD4TfgBIf8ZfWA10IEAAAAASUVORK5CYII=);background-size:18px 18px;border-radius:50%}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){.footer__a1t1VR{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAABCFBMVEUAAAAAbasAgNIAbKgAb6vpaF8AbasAb6sOda/tSjrcZmARcasJcq3N2eTd7fQWerEXgLm15/+zzN0AbKjlop/Q2ebfU0gOda4Odq/6/f769vj4xMD8/f75x8MAbqsAb6vcZ2LbaWH5+v35+/0AbKnno6PV2ebjTkjpQTH////wXE0Ba6gAbanb4eoNda7sWUvoOyrrSjv/z8iazOT1n5eZxNwAcbDqRjf+9/b1oJgLc67d4ur++voAb6zuQC+ayuX82tf9zcfg5u/d4+za4Oml0unb4Oj95eOkyuGXw9sQdK73q6T6o5r4X0/3X0/sVEbyTz+d0ez97OrqSDic0Oz97ev97Ov83Nm3t4z6AAAAKHRSTlMA+wLOiGYxKPTyrZuaOywXFg8Ptz88MPXz7+/f3ty1tLSy3Nq4QDwuRRzqpgAAAhVJREFUOMt1lNl6okAQhQHFuCRuUSd7MjvQreCGBFAgcY0m6mRm8v5vkl5t+EiO3lj8VhWnq0tKSKn8Uu/u1GZFkT7TUTaTf3ieTJ4f8pns0YdI7ka2x522oWlGuzO25ZtcCqkfyzaEgEMAQls+riWZ8rcAgiQE4P66FWd+nuv6EII4BGC/tys0BNMqbHRCCQiAfq9rbS7KnKld7qwBpUQmzNzr+lWdQaU9ChAKuBRyAWP0oMTeXYY8tOrMMTR1eWAIZeKE8sNGDbBcSw9D3iziDLBPFeyzDCE4pHdMTTN9wUAoY++zyETIGmXQYisYaGdRtcwYEAURqkggIxzh0isaH2cUqfKlQ+Q+zaLt69rH0Nsat/fk0if5qnTy2Kaae/4iDP/gcv99x3G8OY17jyeS+mJwmSb6jpBMrEP4RZW+TrSEMJSMTIppCH1SUKKcycoZRqKcaHzqoW590vi/MFz43pQ9QI0LC5bovdehgR1fj7bRTFggzFwhZvBKIEcfWN0oEGbyYxlixtouTALp91a312fHQg5YMN3IJxD+gSnAD1g5tQFgTG9GR2UpKDQqbOg4E/ChW+m8opxj49vnjBhf/rd9iV/MK5Y8fhEotbusHa7mxYYyAqLUpvBbOqhR2GEmnolQ5w0pptb13/Q1D76XpYRqHy2Menr13CZXz23usyV2RpfYmVhiaSnVplosqs1qch2+A3MorgqziMHAAAAAAElFTkSuQmCC)}}@media (-webkit-min-device-pixel-ratio:3),(min-resolution:288dpi){.footer__a1t1VR{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAMAAAC7m5rvAAABL1BMVEUAAAAAa6gAbqwAbatxrNAAbaoAbanZb2wAbaoAbKmItdnOnqLa4OoAY6YAc6oTeLHqU0YAZ6UAZqXw9/rnko7n8PYAbKoAbKnfbGTfZ2DoZ1kAb6noY1cAbqgAbqjUXFO71+i88f8Ab7AXdrAXd6/uoZu41eXV3OYAZqbuoJvtoZy60uS50uS61Oaz5v////8AbanpQTDpRDTsWEoAaadwrM///PsNcqz/+/roPCzpQjL+9/f1npb0kIcAcbD0j4X2n5eu0OWw0OPuQjL/+fgAb6yx0uauz+MAb671kommzOFsqc0GbKkAZaTzRTTp8viw0OXzXE2w0uZ7sdL3rab0mJD9/Pz97+6y0eTzW0z8+vp9stN9stLpRjfpRjbq8/n98e/94d/94d794N794N0+NE+pAAAAL3RSTlMAOvz+7ua5s6mPFAkzGw/qzczKxq6ooJ2OhlFOTEs3FGURDezr0GgzHtLRZ2ZkFCePuSMAAAMZSURBVEjHnZZpQ+IwEIYrNwqKAh54X7vumRYhtFZakYJUoCCC17r3/v/fsKEhzWEB5f0ETZ7MZDKZjOSv+URuPRpdzyXmpddqcTO+HFIfq0g3d6Hl+ObiK6C51XDNkIvwVMnnlVNYlI1aeHVuGhQJGjVZLhRVghVkuWYEI5PAk1iwISMJGFIjGDsZR71bwpCIYXBpzxdayIJuqTAOK5TqMLPwkvqaBgBcIk7ECAVMJ7UrUrsfwFBXiBMwTFWAqZ05H/cFD1POOQDYnohhW4hSLkCa9zPjnCmU4zC8L0wBkOViCMsa4oifHIao7sjWUJ8plTzqAcRReyxGPRyqcpj0sFij1AMmY69NsXapQik01Ih5GRVwQ8XYazUJ1mwRW2QDAZJnEQMHi3LX3yyMWbfX7ucLGi4j4hlD4jfe0TGmdyBvCymw42KrhkyOlC48wixVpJC5NfdWhoPoN3eoFAN9gUKqhQ8QtllDP3l7FIO2xlGY20ZYHPtI7GGOwWg0iIw4wpblgqd26/rO1DRtYBGsPMChbbXpLHkF1ahQkVHz+Sfs27b9W8WY9QcH9rnJzgrNSwmVk6XrEEJVv8fYvaq7svhZ76Xc46mvfuSRvvuP3WxJ61XFV3lX/mPVDSlazb9Z1eiM2KxO5m5mCkkCqpCRNYr36AB+DY8DWLoFGaEDEI/7tgOQ4F+SJf/KdrkPO7ficYvJBYYa2CRLrAHKNfNOSC4xlR9c6lyzIcZ09Ec508qgzqWycHEuMaWwGLhwuQp3ceg1pRSa1qcY5kxQ568pLQqUMqFOMeJnhRYFtgQ90ClMCaJLgS4pQaTgCRRf8OjnOil4xBznIaiw5fVS8DMwxxRzbpAv5lfMgj2mmEvJwy5LCU8Ht2TvKCl5+sRT4kN1RYch9/BnR59tl+IxduNOhn+E04wtEaOckxKahf1jh1Ii5vl5/LJVSDmEEjHPXnrfp53JEErEyDuWxR6K2pvcPH2Rxig5qVVLTmwMA36NYSAyraPcWXvZhq7tSNN1sB1fCT3hpvcptBLfnt700hZ7ayMa3dga12L/B4Qyw7oGfBykAAAAAElFTkSuQmCC)}}.footer__aL2AGs,.footer__bL2AGs{vertical-align:middle}.footer__bL2AGs.footer__cL2AGs{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);display:block;min-width:64px;min-height:64px;max-height:100%}.footer__dL2AGs{max-width:100%}.footer__eL2AGs{position:absolute;width:10px;height:10px}.footer__aBb6wp{display:flex;align-items:center;justify-content:center;margin-left:8px;width:18px;height:18px}.footer__aUs6YV{box-sizing:border-box;display:block;font-size:inherit;font-weight:inherit;line-height:inherit}.footer__bUs6YV,.footer__bUs6YV>*{display:inline-block}.footer__cUs6YV,.footer__cUs6YV>*{display:inline}.footer__aUs6YV a{transition:color .2s ease;padding:0;outline:0;border:0;background:0 0;color:var(--color-original-blue);text-decoration:none;cursor:pointer}.footer__aUs6YV a[href^='tel:']{white-space:nowrap}.footer__aUs6YV a:hover,.footer__aUs6YV a:active,.footer__aUs6YV a_active{color:var(--color-original-blue-hover);text-decoration:none;cursor:pointer}.footer__aUs6YV.footer__dUs6YV a:not([class]){color:inherit}.footer__aUs6YV p{margin-top:20px;margin-bottom:20px}.footer__aUs6YV :first-child{margin-top:0}.footer__aUs6YV :last-child{margin-bottom:0}.footer__aUs6YV ul:not([class]),.footer__aUs6YV ol:not([class]){margin-top:20px;margin-bottom:20px}.footer__aUs6YV ul li,.footer__aUs6YV ol li{position:relative;margin-top:15px;margin-bottom:15px;padding-left:12px;line-height:1.4;list-style-type:none;text-align:left}.footer__aUs6YV ul li::before,.footer__aUs6YV ol li::before{content:'';position:absolute;right:100%;display:block}.footer__aUs6YV ul>li{margin-left:.6em}.footer__aUs6YV ul>li::before{margin-top:.7em;width:.6em;height:.6em;border-radius:.5em;background:#ffdd2d;transform:translateY(-.3em)}.footer__aUs6YV ol>li{counter-increment:ol-level-1;margin-left:.8em}.footer__aUs6YV ol>li::before{content:counter(ol-level-1) '.'}.footer__aUs6YV ol>li>ol{counter-reset:ol-level-2;margin-left:1.1em}.footer__aUs6YV ol>li>ol>li{counter-increment:ol-level-2}.footer__aUs6YV ol>li>ol>li::before{content:counter(ol-level-1) '.' counter(ol-level-2) '.'}.footer__aUs6YV ol>li>ol>li>ol{counter-reset:ol-level-3}.footer__aUs6YV ol>li>ol>li>ol>li{counter-increment:ol-level-3}.footer__aUs6YV ol>li>ol>li>ol>li::before{content:counter(ol-level-1) '.' counter(ol-level-2) '.' counter(ol-level-3) '.'}h1 .footer__aUs6YV ul li,h1 .footer__aUs6YV ol li,h2 .footer__aUs6YV ul li,h2 .footer__aUs6YV ol li,h3 .footer__aUs6YV ul li,h3 .footer__aUs6YV ol li{line-height:1.1;text-align:left}h1 .footer__aUs6YV ul>li,h2 .footer__aUs6YV ul>li,h3 .footer__aUs6YV ul>li{margin-left:10px}h1 .footer__aUs6YV ul>li::before,h2 .footer__aUs6YV ul>li::before,h3 .footer__aUs6YV ul>li::before{margin-top:.55em;width:10px;height:10px;transform:translateY(-5px)}
	</style>
	<link data-href="https://www.cdn-tinkoff.ru/frontend-libraries/footer/1.23.0/footer.css" rel="stylesheet">
	<link data-critical="true" onload="__preloadJS()" rel="stylesheet" href="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/common-chunk.96e62ccedbe0c5e4.chunk.css">
	<link data-critical="true" onload="__preloadJS()" rel="stylesheet" href="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/providers.94fbb39da3446a79.chunk.css">
	<link data-critical="true" onload="__preloadJS()" rel="stylesheet" href="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/platform.ab45ff5e77492ad2.css">
	<link charset="utf-8" as="font" preloadtype="font/woff2" crossorigin="anonymous" rel="preload" href="https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans.woff2">
	<link charset="utf-8" as="font" preloadtype="font/woff2" crossorigin="anonymous" rel="preload" href="https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans_Medium.woff2">
	<link charset="utf-8" as="font" preloadtype="font/woff2" crossorigin="anonymous" rel="preload" href="https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/TinkoffSans_Bold.woff2">
	<link charset="utf-8" as="font" preloadtype="font/woff2" crossorigin="anonymous" rel="preload" href="https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Regular.woff2">
	<link charset="utf-8" as="font" preloadtype="font/woff2" crossorigin="anonymous" rel="preload" href="https://www.cdn-tinkoff.ru/frontend-libraries/npm/react-kit-font/1.0.0/NeueHaasUnicaW1G-Bold.woff2">
	<link charset="utf-8" as="font" preloadtype="font/woff2" crossorigin="anonymous" rel="preload" href="https://www.cdn-tinkoff.ru/platform/fonts/pfhighway/v6/PFHighwaySansPro-Thin.woff2">
	<link charset="utf-8" as="font" preloadtype="font/woff2" crossorigin="anonymous" rel="preload" href="https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Regular.woff2">
	<link charset="utf-8" as="font" preloadtype="font/woff2" crossorigin="anonymous" rel="preload" href="https://www.cdn-tinkoff.ru/platform/fonts/haas/v6/NeueHaasUnicaW1G-Bold.woff2">
	
	<script defer="defer" charset="utf-8" crossorigin="anonymous" data-critical="true" src="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/common-chunk.5d24d9fd6bbf265a.chunk.js"></script>
	<script defer="defer" charset="utf-8" crossorigin="anonymous" data-critical="true" src="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/providers.4fe6944609465bb9.chunk.js"></script>
	<script defer="defer" charset="utf-8" crossorigin="anonymous" data-critical="true" src="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/react.3e6a553b4d232167.js"></script>
	<script defer="defer" charset="utf-8" crossorigin="anonymous" data-critical="true" src="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/platform.65183578e591caef.js"></script>

	<script defer="defer" charset="utf-8" crossorigin="anonymous" id="twtScript" onload="this.setAttribute('loaded', 'true');" onerror="this.setAttribute('loaded', 'error');" integrity="sha256-6p9AqJAc3JhcZElinlZOUPl1/J2mwZFy2+fbhKK0qBg=" src="https://www.cdn-tinkoff.ru/twa/platform/f40120221140fe89f8d39d75cf289760/client.js" loaded="true"></script>
	<link rel="apple-touch-icon" sizes="57x57" datatype="image/png" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" datatype="image/png" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" datatype="image/png" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" datatype="image/png" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" datatype="image/png" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" datatype="image/png" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" datatype="image/png" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" datatype="image/png" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" datatype="image/png" href="/apple-touch-icon-180x180.png">
	<link rel="icon" sizes="16x16" datatype="image/png" href="/favicon-16x16.png">
	<link rel="icon" sizes="32x32" datatype="image/png" href="/favicon-32x32.png">
	<link rel="icon" sizes="96x96" datatype="image/png" href="/favicon-96x96.png">
	<link rel="android-touch-icon" sizes="192x192" datatype="image/png" href="/android-chrome-192x192.png">
	<link rel="icon" sizes="192x192" datatype="image/png" href="/android-chrome-192x192.png">
	<link rel="icon" sizes="" datatype="image/x-icon" href="https://www.cdn-tinkoff.ru/platform/images/favicon.ico">
	<link rel="mask-icon" sizes="" datatype="image/svg+xml" href="/safari-pinned-tab.svg">
	<link rel="smart-banner-icon" sizes="192x192" datatype="image/svg+xml" href="https://www.cdn-tinkoff.ru/platform/images/smartbanner/tinkoff-logo.svg">
	<link rel="preload" href="https://www.cdn-tinkoff.ru/frontend-libraries/feedback/1.21.0/feedback_client.js" as="script" charset="utf-8" crossorigin="anonymous">
	<link rel="preload" href="https://www.cdn-tinkoff.ru/frontend-libraries/header/1.49.1/header_client.js" as="script" charset="utf-8" crossorigin="anonymous">
	<link rel="preload" href="https://www.cdn-tinkoff.ru/frontend-libraries/footer/1.23.0/footer_client.js" as="script" charset="utf-8" crossorigin="anonymous">
	<link rel="preload" href="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/common-chunk.5d24d9fd6bbf265a.chunk.js" as="script" charset="utf-8" crossorigin="anonymous">
	<link rel="preload" href="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/providers.4fe6944609465bb9.chunk.js" as="script" charset="utf-8" crossorigin="anonymous">
	<link rel="preload" href="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/react.3e6a553b4d232167.js" as="script" charset="utf-8" crossorigin="anonymous">
	<link rel="preload" href="https://unic-cdn-prod.cdn-tinkoff.ru/static/payments-payments/platform.65183578e591caef.js" as="script" charset="utf-8" crossorigin="anonymous">
	<script src="https://users-navigation.tinkoff.ru/common/auth/auth.js" type="text/javascript"></script>
	<script src="https://tmsg.tinkoff.ru/widget/t-messenger.js"></script>
	<script type="text/javascript" async="" src="https://acdn.tinkoff.ru/params/common_front/resourses/security/wev-1.0.0.js"></script>
	<script charset="utf-8" src="//unic-cdn-prod.cdn-tinkoff.ru/cobrowsing-static/static/customer/355946bddfada40d0cbff.modern.bundle.js"></script>
	<script charset="utf-8" src="//unic-cdn-prod.cdn-tinkoff.ru/cobrowsing-static/static/customer/22101889027b2d2c123f2.modern.bundle.js"></script>
	<script type="text/javascript" src="https://www.cdn-tinkoff.ru/twa/ttm/tinkoff-pwa/publications/main/index.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.cdn-tinkoff.ru/twa/ttm/tinkoff-pwa/builds/main/6b0cf03b-66d5-4f1c-93ca-298cbc2233a8/ttm.js" crossorigin="anonymous"></script>
	<style>
	.messenger-frame {position: fixed; top: 0; right: 0; bottom: 0; left: 0; z-index: 2001;}@media (min-width: 768px) {.messenger-frame { position: fixed; width: 400px; height: 600px; max-height: calc(100vh - 212px); min-height: 360px; bottom: 92px; right: 18px; top: initial; left: initial; } }.messenger-frame-closed {visibility: hidden; height: 0}.messenger-frame-opened {visibility: visible; opacity: 1;}.messenger-preloader{box-sizing: border-box; z-index:3000;height: 56px; width: 56px; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #ffdd2d; position: absolute; display:inline-block; border:4px solid; border-radius:50%; border-top-color:transparent;-webkit-animation:tmsg-rotate 1s linear infinite;animation:tmsg-rotate 1s linear infinite}.messenger-preloader-hidden{display: none}@-webkit-keyframes tmsg-rotate{0%{-webkit-transform: translate(-50%, -50%) rotate(0); transform: translate(-50%, -50%) rotate(0);}100%{-webkit-transform: translate(-50%, -50%) rotate(360deg);transform: translate(-50%, -50%) rotate(360deg);}}@keyframes tmsg-rotate{0%{-webkit-transform: translate(-50%, -50%) rotate(0);transform: translate(-50%, -50%) rotate(0);}100%{-webkit-transform: translate(-50%, -50%) rotate(360deg); transform: translate(-50%, -50%) rotate(360deg);}}
	</style>
</head>

<body> <input id="menuPrimaryToggle" type="checkbox" class="h-menu-primary-toggle" hidden="">
	<!--noindex--><noscript id="nojs">
  <div style="position: relative;height: 45px;color: #fff;width: 100%;background-color: #dd5656;font-weight: 600;display: flex;align-items: center;justify-content: center;">
      Для корректной работы сервисов банка необходимо&nbsp;<a href="https://www.cdn-tinkoff.ru/frontend-libraries/nojswarning/index.html" style="color: #fff;" target="_blank">включить поддержку JavaScript</a>
  </div>
</noscript>
	<!--/noindex-->
	<div class="application">
		<div class="Layout__layout_FG0IJ">
			<div data-qa-type="uikit/NotificationStack" class="NotificationStack-module__root_Q6H7z" data-qa-file="NotificationStack"></div>
			<div class="feedback__a3L5AL" data-qa-file="FeedbackButtons">
				<div class="feedback__d3L5AL" data-qa-file="FeedbackButtons">
					<div class="feedback__q3L5AL" data-qa-file="FeedbackButtons"><button data-qa-file="FeedbackButtons" type="button" data-qa-type="uikit/link" class="feedback__a28_WH feedback__e28_WH"><span class="feedback__c28_WH" style="outline: none;" tabindex="-1"><div class="feedback__g3L5AL" data-qa-file="FeedbackButtons">Чат</div><div class="feedback__afAppD feedback__jfAppD feedback__sfAppD feedback__KfAppD" data-svg-id="4665195d56455172deec076bf79cc347.svg" style="width: 60px; height: 60px; color: rgb(51, 51, 51); transform: none; vertical-align: top; background-color: rgb(238, 242, 247);" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle class="icon__stroke icon__border" r="48.75" cx="50" cy="50"></circle><path class="icon__stroke" d="M33.882 28.333h31.987c6.324 0 9.487 3.163 9.487 9.488v19.358c0 6.325-3.163 9.488-9.487 9.488H54.587L43.369 77.885V66.667h-9.487c-6.325 0-9.488-3.163-9.488-9.488V37.821c0-6.325 3.163-9.488 9.488-9.488z"></path><path class="icon__fill" d="M57.143 45.238v-4.762H42.857v4.762h4.769v11.905h4.755V45.238z"></path></svg></div></span></button></div>
				</div>
				<div class="feedback__e3L5AL" data-qa-file="FeedbackButtons">
					<div class="feedback__a3QZC9" data-qa-file="FeedbackChat">
						<div class="messenger-preloader messenger-preloader-hidden"></div><iframe style="display: block; height: 100%; width: 100%; box-shadow: rgba(0, 0, 0, 0.12) 4px 0px 24px; border-radius: 12px; background: rgb(255, 255, 255);" frameborder="0" allow="clipboard-read; clipboard-write" src="https://tmsg.tinkoff.ru?app=bank"></iframe></div>
				</div>
			</div><span data-qa-file="UIAlerts"><span data-qa-file="NoIndex"><!--noindex--></span>
			<div data-qa-type="uikit/NotificationStack" class="NotificationStack__root_LWdEj"></div><span data-qa-file="NoIndex"><!--/noindex--></span></span>
			<script data-qa-file="HeaderModule">
			window.__STATIST_SERVER_STATE__pfcore_header = '{}'
			</script>
			<header data-qa-header-type="PFHeader" data-qa-header-auth="true" class="header__aho1os" data-qa-file="DefaultHeader">
				<div class="header__bmosMw">
					<div class="header__aICU-+X" data-qa-file="TabBarBlock">
						<div data-qa-file="TabBarBlock" class="header__aB579R" style="height: calc(56px + env(safe-area-inset-bottom));"><a href="/mybank/" class="header__bB579R" aria-selected="false"><span class="header__cB579R" data-qa-file="TabBar"><span data-qa-type="uikit/icon" class="header__a--a4f3" style="--tds-icon-size: 28px;"><span data-qa-type="uikit/icon.content" class="header__d--a4f3" role="presentation"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" focusable="false"><defs><linearGradient id="dsId__PHH4-f35D0_linear_1524_1627" x1="14.5" y1="6" x2="22.725" y2="19.595" gradientUnits="userSpaceOnUse"><stop stop-opacity=".5" stop-color="currentColor"></stop><stop offset="1" stop-opacity=".3" stop-color="currentColor"></stop></linearGradient></defs><path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 8.5a4 4 0 0 1 4-4H18l-4 15H1.5v-11Zm4.5 6a2 2 0 0 0-2 2h3.5a2 2 0 0 0 2-2H6Z" fill="currentColor"></path><path d="M18 4.5h4.5v11a4 4 0 0 1-4 4H14l4-15Z" fill="url(#dsId__PHH4-f35D0_linear_1524_1627)"></path></svg></span></span></span><span class="header__eB579R" data-qa-file="TabBar">Главная</span></a><a href="/payments/" class="header__bB579R" aria-selected="true"><span class="header__cB579R" data-qa-file="TabBar"><span data-qa-type="uikit/icon" class="header__a--a4f3" style="--tds-icon-size: 28px;"><span data-qa-type="uikit/icon.content" class="header__d--a4f3" role="presentation"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" focusable="false"><path opacity=".85" fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1 1 18 0 9 9 0 0 1-18 0Zm9 4.75a4.75 4.75 0 1 0 0-9.5 4.75 4.75 0 0 0 0 9.5Z" fill="currentColor"></path><circle opacity=".35" cx="12" cy="12" r="4.75" fill="currentColor"></circle></svg></span></span></span><span class="header__eB579R" data-qa-file="TabBar">Платежи</span></a><a href="/mybank/new-product/" class="header__bB579R" aria-selected="false"><span class="header__cB579R" data-qa-file="TabBar"><span data-qa-type="uikit/icon" class="header__a--a4f3" style="--tds-icon-size: 28px;"><span data-qa-type="uikit/icon.content" class="header__d--a4f3" role="presentation"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" focusable="false"><defs><linearGradient id="dsId_lDsLci3C6S0_linear_11916_2429" x1="21" y1="12.002" x2="6.357" y2="19.997" gradientUnits="userSpaceOnUse"><stop stop-opacity=".7" stop-color="currentColor"></stop><stop offset="1" stop-opacity=".5" stop-color="currentColor"></stop></linearGradient></defs><path d="M3 12.002h18l-2.587 6.714a2 2 0 0 1-1.867 1.281H7.287a2 2 0 0 1-1.881-1.321L3 12.002Z" fill="url(#dsId_lDsLci3C6S0_linear_11916_2429)"></path><path d="M1.5 10.002a1 1 0 0 1 1-1h19a1 1 0 0 1 1 1v2h-21v-2Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.224 3.67a2.5 2.5 0 0 1 1.209 3.323l-1.902 4.079-2.266-1.057 2.959-6.344Zm7.657 0a2.5 2.5 0 0 0-1.21 3.323l1.903 4.079 2.265-1.057-2.958-6.344Z" fill="currentColor" fill-opacity=".8"></path></svg></span></span></span><span class="header__eB579R" data-qa-file="TabBar">Витрина</span></a><a class="header__bB579R" aria-selected="false"><span class="header__cB579R" data-qa-file="TabBar"><span data-qa-type="uikit/icon" class="header__a--a4f3" style="--tds-icon-size: 28px;"><span data-qa-type="uikit/icon.content" class="header__d--a4f3" role="presentation"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" focusable="false"><defs><linearGradient id="dsId_gn4jRJUjeS0_linear_1525_566" x1="11.75" y1="4.5" x2="22.689" y2="22.583" gradientUnits="userSpaceOnUse"><stop stop-color="currentColor"></stop><stop offset="1" stop-opacity=".7" stop-color="currentColor"></stop></linearGradient></defs><path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 4.5h16A4.5 4.5 0 0 1 22 9v14l-2.244-2.409A5 5 0 0 0 16.098 19H6a4.5 4.5 0 0 1-4.5-4.5v-10ZM6 11a3 3 0 0 1 3-3h8a3 3 0 0 1-3 3H6Zm3 2a3 3 0 0 0-3 3h4a3 3 0 0 0 3-3H9Z" fill="url(#dsId_gn4jRJUjeS0_linear_1525_566)"></path><path opacity=".3" d="M6 16a3 3 0 0 1 3-3h4a3 3 0 0 1-3 3H6Z" fill="currentColor"></path></svg></span></span></span><span class="header__eB579R" data-qa-file="TabBar">Чат</span></a><a href="/settings/" class="header__bB579R" aria-selected="false"><span class="header__cB579R" data-qa-file="TabBar"><span data-qa-type="uikit/icon" class="header__a--a4f3" style="--tds-icon-size: 28px;"><span data-qa-type="uikit/icon.content" class="header__d--a4f3" role="presentation"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" focusable="false"><path opacity=".6" d="M1 11a3 3 0 0 1 6 0v1a3 3 0 0 1-3 3H1v-4Z" fill="currentColor"></path><path opacity=".75" d="M9 11a3 3 0 1 1 6 0v1a3 3 0 0 1-3 3H9v-4Z" fill="currentColor"></path><path d="M17 11a3 3 0 1 1 6 0v1a3 3 0 0 1-3 3h-3v-4Z" fill="currentColor"></path></svg></span></span></span><span class="header__eB579R" data-qa-file="TabBar">Еще</span></a></div>
					</div>
				</div>
			</header>
			<div style="flex: 1 0 auto; width: 100%; height: 100%; display: block;" data-qa-file="PageWrapper">
				<div class="Page__page_FV1MK">
					<div class="Banner__root_rTHYA" style="color: rgb(255, 255, 255);" data-qa-file="Container">
						<div class="BrandSubstrate__background_RbqAX" style="background: rgb(107, 210, 236);" data-qa-file="BrandSubstrate">
							<div class="BrandSubstrate__gradient_gQbHZ" style="background: linear-gradient(230deg, rgba(107, 210, 236, 0) 38%, rgb(107, 158, 236) 150%, rgb(107, 141, 236) 100%);" data-qa-file="BrandSubstrate"></div>
						</div>
						<div data-qa-type="uikit/container" class="ContainerAdaptive-module__root_zmvuB ContainerAdaptive-module__wideDesktopMd_qQaiY">
							<div class="Banner__container_UGrjx" data-qa-file="Container">
								<div class="Banner__content_UPPti" data-qa-file="Banner">
									<div data-qa-file="Banner"><span class="Banner__title_XtLze" data-qa-file="Banner"><div data-qa-file="Banner" class="Text-module__text_htRzZ Text-module__text_size_17_KsNSn Text-module__text_sizeTabletS_17_dxvPD Text-module__text_sizeTabletL_17_z9Ho0 Text-module__text_sizeDesktopS_30_fYwrq Text-module__text_sizeDesktopM_30_upr5f Text-module__text_sizeDesktopL_30_JJTo0 Text-module__text_overflowEllipsis_yVjc3" data-qa-type="uikit/text">Перевод физическому лицу</div></span></div>
								</div>
								<div class="Banner__icon_YZ0Om Banner__icon_rounded_F70fF" data-qa-file="Banner">
									<div class="ui-logo ui-logo_size_66 ui-logo_size_mobile_42" style="background-color: rgb(107, 210, 236);" data-qa-file="UILogoWrapper"><span class="ui-icon ui-icon_border ui-icon_size_66 ui-icon_size_mobile_42 ui-icon_color_white ui-logo__icon" data-qa-file="UIIcon"><svg xmlns="http://www.w3.org/2000/svg" data-svg-id="1cd92c6d4c81fc4d8a2727bd9f376448.svg" viewBox="0 0 100 100" class="ui-icon__svg-wrapper ui-logo__svg" data-qa-file="UIIcon"><circle class="ui-icon__svg ui-icon__border" cx="50" cy="50" r="48"></circle><path class="ui-icon__svg" d="M73.4 65.5c-1.1 1.5-2.3 2.9-3.6 4.3C64.3 75.3 57.7 78 50 78c-7.7 0-14.3-2.7-19.9-8.2-5.4-5.5-8.1-12-8.1-19.8 0-7.7 2.7-14.3 8.1-19.9C35.7 24.7 42.3 22 50 22c7.7 0 14.3 2.7 19.7 8.1 1.3 1.4 2.5 2.9 3.6 4.4M42.5 55h3.2v-4.6h-3.2"></path><path class="ui-icon__svg" d="M45.7 50.4V37.5h4.4c1.8 0 3.3.6 4.5 1.9 1.2 1.2 1.9 2.7 1.9 4.5 0 1.8-.6 3.3-1.9 4.5-1.2 1.3-2.8 2-4.5 2h-4.4zm0 10V55h7.9m12.6-5h15.9l-6.5-6.6m6.5 6.6l-6.5 6.6"></path></svg></span></div>
								</div>
							</div>
						</div>
					</div>
					<div data-qa-type="uikit/container" class="ContainerAdaptive-module__root_zmvuB ContainerAdaptive-module__wideDesktopMd_qQaiY">
						<section class="UILayoutSection__section_S8uZy" data-qa-file="UILayoutSection">
							<div class="Row-module__row_lV3vw" style="margin-top: 0px; margin-bottom: 0px;" data-qa-file="Row">
								<div class="Column-module__column_gkBDn Column-module__column_size_12_JfttU Column-module__column_size_desktopS_8_E2WCH" style="margin-bottom: 0px;" data-qa-file="Column">
									<div class="UIPaymentSuccess__left_ZJlYw" data-qa-file="UIPaymentSuccess">
										<div data-qa-type="payments/paymentSuccess" data-qa-file="UIPaymentSuccess">
											<div class="PageTitleContainer__container_pgPzY" data-qa-file="PageTitleContainer">
												<div class="PageTitleContainer__title_wW_Qw" data-qa-file="PageTitleContainer">
													<div data-qa-file="PageTitleContainer" class="Text-module__text_htRzZ Text-module__text_size_20_PlugL Text-module__text_sizeTabletS_20_dyVas Text-module__text_sizeTabletL_20_foXW1 Text-module__text_sizeDesktopS_40_ujJO2 Text-module__text_sizeDesktopM_40_N2Tes Text-module__text_sizeDesktopL_40_w3Wya Text-module__text_alignDesktopS_left_t08UT" data-qa-type="uikit/text">Переведено!</div>
												</div>
												<div data-qa-file="PageTitleContainer" style="color: gray;" class="Text-module__text_htRzZ Text-module__text_size_17_KsNSn Text-module__text_sizeTabletS_17_dxvPD Text-module__text_sizeTabletL_17_z9Ho0 Text-module__text_sizeDesktopS_17_mrItK Text-module__text_sizeDesktopM_17_u_p8I Text-module__text_sizeDesktopL_17_xjIUh Text-module__text_alignDesktopS_left_t08UT" data-qa-type="uikit/text"><span data-qa-type="payments/successDescription" data-qa-file="SuccessDescription"><span data-qa-file="SuccessDescription"><span data-qa-type="uikit/money" data-cobrowsing-secure="text" class="Money-module__money_UZBbh"><?=formatC($check_data['moneyAmount'])?><span data-qa-file="Money">&nbsp;₽</span></span> <span data-qa-file="SuccessDescription">на счет получателя <nobr data-cobrowsing-secure="text" data-qa-file="SuccessDescription"><?=$check_data['ibanNumber']?></nobr></span></span>
													</span>
												</div>
											</div>
											<div class="FormRow-module__root_OKiT9 FormRow-module__root_offset_20_BzjWx" data-qa-type="uikit/formRow" data-qa-file="FormRow">
												<div data-qa-type="payments/paymentSuccessActions" data-qa-file="Actions">
													<ul class="Actions__actions_S5LJ0" data-qa-file="Actions">
														<li data-qa-type="payments/paymentSuccessAction" class="Actions__action_vO8WW" data-qa-file="Actions">
															<a href="/history/receipt.php?id=<?=$check_data['id']?>" target="_blank"><div class="ContextMenuForGetReceiptButton__root_lPxFr" data-qa-file="ContextMenuForGetReceiptButton"><span data-qa-type="uikit/contextMenu" class="Popover-module__popover_IdThB"><span class="Popover-module__childrenBlock_Iep3y" data-qa-type="uikit/contextMenu.children" data-qa-file="Popover"><span class="ContextMenu-module__button_Slede" aria-label="Меню" data-qa-file="ContextMenu"><div tabindex="-1" role="link" class="IconWithText__container_vhE1h IconWithText__container_blue_Xi8SE" data-qa-file="IconWithText"><div role="presentation" class="IconWithText__icon_CnkTL" data-qa-file="IconWithText"><span data-qa-file="utils" data-qa-type="uikit/icon" class="Icon-module__root_d2zmJ Icon-module__root_withContainer_ly4_l" style="--tds-icon-container-size: 48px; --tds-icon-size: 24px; color: rgb(23, 113, 230);"><span class="Icon-module__background_jW8qi" style="background: rgb(236, 241, 247);" data-qa-file="Icon"></span><span data-qa-type="uikit/icon.content" data-svg-id="cc51dabae0a663a272de5828f8bfd321.svg" class="Icon-module__icon_deced" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13 12.998l2.293-2.292a1 1 0 011.414 1.414l-3.294 3.294a1.996 1.996 0 01-2.826 0L7.293 12.12a1 1 0 111.414-1.414L11 12.998V4a1 1 0 012 0v8.998zM2 16.003a1 1 0 112 0v1C4 18.1 4.9 19 5.993 19h12.014c1.1 0 1.993-.894 1.993-1.997v-1a1 1 0 112 0v1A3.995 3.995 0 0118.007 21H5.993A4.003 4.003 0 012 17.003v-1z" fill="currentColor"></path></svg></span></span>
															</div>
															<div class="IconWithText__textWrapper_GiIoI" data-qa-file="IconWithText">
																<div class="IconWithText__title_O5s0l" role="heading" aria-level="3" data-qa-file="IconWithText">
																	<div data-qa-file="IconWithText">Квитанция по операции</div>
																</div>
															</div>
												</div>
												</span>
												</span>
												<div hidden="" data-qa-file="Popover"></div>
												<div hidden="" data-qa-file="Popover"></div>
												</span>
											</div></a>
											</li>
											<li data-qa-type="payments/paymentSuccessAction" class="Actions__action_vO8WW" data-qa-file="Actions">
												<div tabindex="-1" role="link" class="IconWithText__container_vhE1h IconWithText__container_blue_Xi8SE" data-qa-file="IconWithText">
													<div role="presentation" class="IconWithText__icon_CnkTL" data-qa-file="IconWithText"><span class="ui-icon ui-icon_no-border ui-icon_bg_color-lightblue-100 ui-icon_size_48 ui-icon_color_color-blue-100" data-qa-file="UIIcon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="ui-icon__svg-wrapper" data-qa-file="UIIcon"><g fill="none" fill-rule="evenodd" data-qa-file="StarWithPlus"><path d="M0 0h100v100H0z" data-qa-file="StarWithPlus"></path><g stroke="#5485B8" stroke-linecap="round" stroke-width="2.308" data-qa-file="StarWithPlus"><path stroke-linejoin="round" d="M33.703 73.636l6.482-20.25-16.985-12.5h21.005l6.482-20.333 6.482 20.333h21.005l-16.984 12.5 6.482 20.25-16.985-12.5z" data-qa-file="StarWithPlus"></path><path d="M63.077 28.125h9.23M67.692 23.438v9.375" data-qa-file="StarWithPlus"></path></g></g></svg></span></div>
													<div class="IconWithText__textWrapper_GiIoI" data-qa-file="IconWithText">
														<div class="IconWithText__title_O5s0l" role="heading" aria-level="3" data-qa-file="IconWithText">
															<div data-qa-file="IconWithText">Создать шаблон и&nbsp;настроить автоплатеж</div>
														</div>
													</div>
												</div>
											</li>
											</ul>
										</div>
										<div data-qa-type="uikit/CollapseBlock" class="CollapseBlock-module__container_vT28N" style="height: 0px; overflow: hidden;">
											<div class="CollapseBlock-module__childrenBlock_animating_wJcIg CollapseBlock-module__childrenBlock_align_top_lij1Q" data-qa-file="CollapseBlock"></div>
										</div>
									</div><a href="/mybank/payments"><button class="ui-button ui-button__ui-button_y6os1 ui-button__ui-button_link_Xdbas ui-button__ui-button_uppercase_nnoAw ui-button__ui-button_size_m_Upe3l ui-button__ui-button_transparent-original-blue_x1abp" target="" data-qa-file="UIButton"><span class="ui-button__ui-button__text_s7TxT" data-qa-file="UIButton">Завершить</span><span class="" data-qa-file="UIButton"></span></button></a></div>
							</div>
					</div>
					<div class="Column-module__column_gkBDn Column-module__column_size_12_JfttU Column-module__column_size_desktopS_4_Qq_uX" style="margin-bottom: 0px;" data-qa-file="Column">
						<div class="UIPaymentSuccess__right_htHY1" data-qa-file="UIPaymentSuccess"></div>
					</div>
				</div>
				<div class="Row-module__row_lV3vw" style="margin-top: 0px; margin-bottom: 0px;" data-qa-file="Row">
					<div class="Column-module__column_gkBDn Column-module__column_size_12_JfttU" style="margin-bottom: 0px;" data-qa-file="Column"></div>
				</div>
				</section>
			</div>
		</div>
	</div>
	<div style="margin-top: auto;" data-qa-file="lazy-render.browser"></div>
	</div>
	</div>
	
</body>

</html>