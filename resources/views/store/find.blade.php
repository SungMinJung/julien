@extends('store.common')

@section('inner')
    <div class="col-md-12 padding-init-0" style="background-color: #eee;">
        <div class="col-md-6 padding-init-0">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <h2><p><b>줄리앙 매장</b></p></h2>
                <p><b>오픈 매장</b></p>
                <div class="" id="store_find">
                    <form action="">
                        <div class="row"><label>지역선택</label>
                            <select class="pull-right" style="width: 174px; height:40px;">
                                {{-- <option>전체보기</option>
                                @foreach ($storeList as $store)
                                    <option>{{ $store->location }}</option>
                                @endforeach --}}
                                <option>전체보기</option>
                                <option>서울</option>
                                <option>인천</option>
                                <option>경기도</option>
                                <option>강원도</option>
                                <option>충청북도</option>
                                <option>세종</option>
                                <option>대전</option>
                                <option>충청남도</option>
                                <option>전라북도</option>
                                <option>광주</option>
                                <option>전라남도</option>
                                <option>경상북도</option>
                                <option>대구</option>
                                <option>울산</option>
                                <option>경상남도</option>
                                <option>제주도</option>
                                <option>부산</option>
                            </select>
                            <br></div>
                        <div class="row"><label>지점명/주소검색</label><input type="text" class="pull-right" style="height:40px;"></div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="map" id="korea">
                <div class="busan"><p class="p-busan">부산</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/busan.png"  ></div>
                <div class="gangwon"><p class="p-gangwon">강원도</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gangwon.png"></div>
                <div class="chungbok"><p class="p-chungbok">충청 북도</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/chungbuk.png" ></div>
                <div class="chungnam"><p class="p-chungnam">충청 남도</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/chungnam.png" > </div>
                <div class="daegu"><p class="p-daegu">대구</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/daegu.png" >    </div>
                <div class="daejeon"><p class="p-daejeon">대전</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/daejeon.png">  </div>
                <div class="gwangju"><p class="p-gwangju">광주</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gwangju.png" >      </div>
                <div class="gyeongbuk"><p class="p-gyeongbuk">경상 북도</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gyeongbuk.png" ></div>
                <div class="gyeonggi"><p class="p-gyeonggi">경기도</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gyeonggi.png" ></div>
                <div class="gyeongnam"><p class="p-gyeongnam">경상 남도</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gyeongnam.png" ></div>
                <div class="incheon"><p class="p-incheon">인천</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/incheon.png" ></div>
                <div class="jeju"><p class="p-jeju">제주</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/jeju.png"></div>
                <div class="jeonbuk"><p class="p-jeonbuk">전라 북도</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/jeonbuk.png" ></div>
                <div class="jeonnam"><p class="p-jeonnam">전라 남도</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/jeonnam.png" ></div>
                <div class="sejong"><p class="p-sejong">세종</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/sejong.png"></div>
                <div class="seoul"><p class="p-seoul">서울</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/seoul.png"></div>
                <div class="ulsan"><p class="p-ulsan">울산</p><img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/ulsan.png" ></div>

            </div>
        </div>

        
    </div>
    <div id="store_table" class="col-md-12 padding-init-0">
        <table class="table table-bordered text-center">
            <thead >
                <tr>
                    <th class="text-center" style="width:10%;">지역</th>
                    <th class="text-center" style="width:30%;">지점명</th>
                    <th class="text-center" style="width:50%;">주소</th>
                    <th class="text-center" style="width:10%;">비고</th>
                </tr>
            </thead>
            <tbody>
                    {{-- <td>지역</td>
                    <td>지점명</td>
                    <td>주소</td>
                    <td>비고</td> --}}

                    {{-- @foreach ($storeList as $store)
                        <td>{{ $store->location }}</td>
                        <td>{{ $store-> }}</td>
                        <td>{{ $store-> }}</td>
                        <td>{{ $store-> }}</td>
                    @endforeach --}}
            </tbody>            
        </table>
    </div>

@endsection

