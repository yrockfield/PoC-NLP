//現在日時をYYYYMMDDHH24MISS形式で取得する
function currentDateTimeString(){
	// 現在の日時:LambdaではUTC時刻なので、JST(+9:00)にする
	var d = new Date(Date.now() + (9 * 60) * 60 * 1000);

	// 年月日時分秒を取得
	var year = d.getFullYear();	// 年
	var month = fillZero(d.getMonth() + 1); // 月
	var date = fillZero(d.getDate()); // 日
	var hour = fillZero(d.getHours()); // 時
	var minute = fillZero(d.getMinutes()); // 分
	var second = fillZero(d.getSeconds()); // 秒

	// 年月日時分秒の文字列の作成(YYYYMMDDHHMMSS)
	var str = year + month + date + hour + minute + second;
	
	return str;
};
// 2桁のゼロ埋め
function fillZero ( number ) {
    return (0 + number.toString()).slice(-2);
};
