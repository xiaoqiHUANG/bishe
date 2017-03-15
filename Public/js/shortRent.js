$(function(){
	
	//发布房源
	$('.subPublishingBtn').click(function(e){
		// e.stopPropagation();
		// e.preventDefault();
		var province = $('#province'),
			city = $('#city'),
			detailAddress = $('.detailAddress'),
//			rentType = $('.rentType'),
//			rentPeople = $('.rentPeople'),
			roomArea = $('.roomArea'),
			roomtype_shi = $('.roomtype_shi'),
			roomtype_ting = $('.roomtype_ting'),
			roomtype_wei = $('.roomtype_wei'),
			roomtype_yu = $('.roomtype_yu'),
			roomtype_chu = $('.roomtype_chu'),
			roomtype_yt = $('.roomtype_yt'),
			roomtype_sb = $('.roomtype_sb'),
			roomtype_db = $('.roomtype_db'),
			roomPrice = $('.roomPrice'),
//			perRents = $('.perRents'),
			beginRentTime = $('.beginRentTime'),
			endRentTime = $('.endRentTime'),
			roomTitle = $('.roomTitle'),
			roomDesc = $('.roomDesc');
		
		if(province.val()==0){
			$('.tip_roomAddress').warning('请选择省份！');
			province.focus();
			return;
		}
		if(city.val()==0){
			$('.tip_roomAddress').warning('请选择城市！');
			city.focus();
			return;
		}
		if(!detailAddress.isEmptyString()){
			$('.tip_roomAddress').warning('请输入详细地址！');
			detailAddress.focus();
			return;
		}
		if(!roomArea.isEmptyString() || !roomArea.isNUM()){
			$('.tip_roomArea').show().fadeIn('fast').delay(2000).fadeOut();
			roomArea.focus();
			return;
		}
		if(!roomtype_shi.isEmptyString() || !roomtype_shi.isNUM()){
			$('.tip_roomtype').show().fadeIn('fast').delay(2000).fadeOut();
			roomtype_shi.focus();
			return;
		}
		if(!roomtype_ting.isEmptyString() || !roomtype_ting.isNUM()){
			$('.tip_roomtype').show().fadeIn('fast').delay(2000).fadeOut();
			roomtype_ting.focus();
			return;
		}
		if(!roomtype_wei.isEmptyString() || !roomtype_wei.isNUM()){
			$('.tip_roomtype').show().fadeIn('fast').delay(2000).fadeOut();
			roomtype_wei.focus();
			return;
		}
		if(!roomtype_yu.isEmptyString() || !roomtype_yu.isNUM()){
			$('.tip_roomtype').show().fadeIn('fast').delay(2000).fadeOut();
			roomtype_yu.focus();
			return;
		}
		if(!roomtype_chu.isEmptyString() || !roomtype_chu.isNUM()){
			$('.tip_roomtype').show().fadeIn('fast').delay(2000).fadeOut();
			roomtype_chu.focus();
			return;
		}
		if(!roomtype_yt.isEmptyString() || !roomtype_yt.isNUM()){
			$('.tip_roomtype').show().fadeIn('fast').delay(2000).fadeOut();
			roomtype_yt.focus();
			return;
		}
		if(!roomtype_sb.isEmptyString() || !roomtype_sb.isNUM()){
			$('.tip_roomtype').show().fadeIn('fast').delay(2000).fadeOut();
			roomtype_sb.focus();
			return;
		}
		if(!roomtype_db.isEmptyString() || !roomtype_db.isNUM()){
			$('.tip_roomtype').show().fadeIn('fast').delay(2000).fadeOut();
			roomtype_db.focus();
			return;
		}
		if(!roomPrice.isEmptyString()|| !roomPrice.isNUM()){
			$('.tip_roomPrice').show().fadeIn('fast').delay(2000).fadeOut();
			roomPrice.focus();
			return;
		}
		if(!beginRentTime.isEmptyString()){
			$('.tip_roomMsg').warning('请填写房屋的开始出租时间');
			beginRentTime.focus();
			return;
		}
		if(!endRentTime.isEmptyString()){
			$('.tip_roomMsg').warning('请填写房屋的结束出租时间');
			endRentTime.focus();
			return;
		}
		if(!roomTitle.isEmptyString()){
			$('.tip_roomTitle').warning('请填写房源标题');
			roomTitle.focus();
			return;
		}
		if(!roomDesc.isEmptyString()){
			$('.tip_roomDesc').warning('请填写有关的描述');
			roomDesc.focus();
			return;
		}
	})
	
    // 搜索短期房源
    $('#searchShortRoom').click(function(){
        var rentDay = $('#rentDay').val();
        var topPrice = $('#topPrice').val();
        var lowPrice = $('#lowPrice').val();
        var rentPeople = $('#rentPeople').val();
        var place = $('#place');
        console.log(rentDay,",",topPrice,",",lowPrice,",",rentPeople,",",place);
        if(!place.isEmptyString()){
            // console.log(place.isEmptyString());
            alert("请确认是否已正确输入要搜索的地址！");
            return false;
        }else{
            alert("搜索中...");
        }
    })
    // 搜索长期房源
    $('#searchLongRoom').click(function(){
        var rentMonth = $('#rentMonth').val();
        var topPrice = $('#topPrice').val();
        var lowPrice = $('#lowPrice').val();
        var rentPeople = $('#rentPeople').val();
        var place = $('#place');
        console.log(rentMonth,",",topPrice,",",lowPrice,",",rentPeople,",",place);
        if(!place.isEmptyString()){
            // console.log(place.isEmptyString());
            alert("请确认是否已正确输入要搜索的地址！");
            return false;
        }else{
            alert("长期房源搜索中...");
        }
    })
})