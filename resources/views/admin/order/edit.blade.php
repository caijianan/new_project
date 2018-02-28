@extends('admin.layout.index')
@section('content')
	<div class="container">
		<div class="card">

		    <div class="card-body card-padding">
		        <p class="c-black f-500 m-b-20" style="font-size: 17px">修 改 订 单</p>
				<form action="{{ url('admin/order/1') }}" method="post">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
				
		        <p class="c-black f-500 m-b-20 m-t-20">订 单 号</p>
		        <div class="form-group">
		            <div class="fg-line disabled">
		                <input class="form-control" disabled="" placeholder="{{ $data->id }}"></input>
		            </div>
		        </div>
		        <p class="c-black f-500 m-b-20 m-t-20">订 单 时 间</p>
		        <div class="form-group">
		            <div class="fg-line disabled">
		                <input class="form-control" disabled="" placeholder="{{ date('Y-m-d H:i:s',$data->o_ctime) }}"></input>
		            </div>
		        </div>
		        <p class="c-black f-500 m-b-20 m-t-20">订 单 备 注</p>
		        <div class="form-group">
		            <div class="fg-line disabled">
		                <input type="text" class="form-control" value="{{ $data->o_sum }}" name="o_msg"></input>
		            </div>
		        </div>
                <p class="c-black f-500 m-b-20 m-t-20">订 单 总 价</p>
		        <div class="fg-line">
                    <input type="text" class="form-control" value="{{ $data->o_sum }}" name="o_sum"></input>
                </div>
                <p class="c-black f-500 m-b-20 m-t-20">订 单 状 态 </p>
				<label class="radio radio-inline m-r-20">
                    <input type="radio"  value="1" name="o_status" {{ $data->o_status == 1 ?'checked' : '' }}></input>
                    <i class="input-helper"></i>  
                   	已 完 成
                </label>
                <label class="radio radio-inline m-r-20">
                    <input type="radio"  value="2" name="o_status" {{ $data->o_status == 2 ?'checked' : '' }}></input>
                    <i class="input-helper"></i>  
                    未 完 成
                </label>
                <p class="c-black f-500 m-b-20 m-t-20">支 付 方 式</p>
                <label class="radio radio-inline m-r-20">
                    <input type="radio"  value="1" name="o_pay" {{ $data->o_pay == 1 ?'checked' : '' }}></input>
                    <i class="input-helper"></i>  
                    线 上 支 付
                </label>
                <label class="radio radio-inline m-r-20">
                    <input type="radio" value="2" name="o_pay" {{ $data->o_pay == 2 ?'checked' : '' }}></input>
                    <i class="input-helper"></i>  
                    线 下 支 付
                </label><br><br>
                <div >
					<button class="btn btn-primary btn-block waves-effect" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修 改 订单 </font></font></button>
				</div>
				</form>
		    </div>
		</div>
	</div>
</section>
@endsection