@extends('layout.header')
@section('mobile-menu-promotion')
<div class="navbar-bottom w-100">
    <div class="row row-cols-5 mx-0 justify-content-center">
        <div class="col-xxl-auto px-0">
            <div class="bg-gold-border1 link-home">
                <div class="bg-link-brown link-bg-hover">
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.index')}}">
                        <img src="{{asset('img/icon-home.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">หน้าแรก</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-auto px-0">
            <div class="bg-gold-border1 link-regis">
                <div class="bg-link-brown link-bg-hover">
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="">
                        <img src="{{asset('img/icon-regis2.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">สมัครสมาชิก</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-auto px-0">
            <div class="bg-gold-border1 link-reward">
                <div class="bg-link-brown link-bg-hover">
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center d-none d-xxl-flex" href="{{route('Landingpage.rewardlotto')}}">
                        <img src="{{asset('img/icon-reward.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">วิธีเช็ครางวัลหวย</h3>
                    </a>
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center d-block d-xxl-none" href="{{route('Landingpage.rewardlotto')}}">
                        <img src="{{asset('img/mobile/icon-intolotto.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">เข้าแทงหวย</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-auto px-0">
            <div class="bg-gold-border1 link-promotion">
                <div class="bg-link-brown link-bg-hover">
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.promotion')}}">
                        <img src="{{asset('img/icon-promotion2.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">โปรโมชั่น</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-auto px-0">
            <div class="bg-gold-border1 link-contact m-noborder">
                <div class="bg-link-brown link-bg-hover">
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.contact')}}">
                        <img src="{{asset('img/icon-contact.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">ติดต่อเรา</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
            <div class="col-12 col-md-9">
                    <div class="h-100 zone-background zone-reward zone-content">
                        <img src="{{asset('img/reward/banner-yeekee.png')}}">

                <h1 class="zone-contact-title-gradient">กติกาและการเช็คผลหวยยี่กี</h1>
                <h1 class="zone-contact-title">กติกาหวยยี่กี</h1>

                <ul>
                    <li>เปิดรับแทงวันละ 88 รอบ ออกผลรางวัลทุกๆ 15 นาที</li>
                    <li>รอบแรกเริ่มเวลา 06.00 น. ( เริ่มทายผลได้ตั้งแต่ 05.00 น. ทายผลล่วงหน้าได้ทุกรอบ )</li>
                    <li>ปิดรับแทงรอบสุดท้าย เวลา 03.45 น.</li>
                    <li>สามารถส่งตัวเลขได้ฟรี ไม่จำกัดจำนวนครั้ง ด้วยกติกาที่ชัดเจนและสามารถตรวจสอบได้</li>
                    <li>สมาชิกที่ยิงเลขได้ลำดับที่ 1 จะได้รับเครดิต 200 บาท</li>
                    <li>สมาชิกที่ยิงเลขได้ลำดับที่ 16 จะได้รับเครดิต 400 บาท </li>
                    <li>สมาชิกที่ยิงเลขได้ลำดับที่ 20 จะได้รับเครดิต 200 บาท </li>
                </ul>
                <p>
                    เงื่อนไข : จะต้องมียอดเดิมพันรอบนั้นขั้นต่ำ 100 บาท ขึ้นไป ( หากถูกรางวัลทางระบบจะดำเนินการเติมเครดิตให้อัตโนมัติ )
                </p>
                <ul>
                    <li>เลขวิ่งบน รับทายผล 3 ตัวบนเหมือนหวยรัฐบาล แต่ถ้าหากว่าในรอบนั้นออกเลขเดียวกัน ทางระบบจะดำเนินการจ่าย เล่นวิ่งตัวนั้น 1 ต่อเท่านั้น เช่น วิ่งบน 3 แต่หวยออก 363 เลขวิ่งจ่ายแค่ 1 ต่อ</li>
                    <li>หากเลขที่สมาชิกร่วมทายผลมีไม่ถึง 20 ลำดับ ไม่ว่าในกรณีใดก็ตาม จนเป็นสาเหตุให้หวยยี่กีไม่สามารถออกผลรางวัลได้ ทางระบบจะทำการคืนโพยและคืนยอดเงินที่แทงเข้ามาในรอบนั้นโดยประมาณ 30 นาที</li>
                    <li>CHUDJENBET ให้ราคาจ่ายสูงกว่าใครทุกการเดิมพันจึงไม่มีส่วนลดเปอร์เซ็นต์ </li>
                    <li>เวลาในการยิงเลขอาจดีเลย์โดยประมาณ 10 วินาที</li>
                </ul>

                <h5 class="zone-text-gold">การออกรางวัลหวยยี่กี</h1>
                <ul>
                    <li>ออกผลรางวัลโดยการให้สมาชิกทุกๆท่าน ร่วมส่งตัวเลขจำนวน 5 หลักจากนั้นทางบริษัทฯจะนำตัวเลขที่สมาชิกส่งเข้า
มาทั้งหมดในรอบนั้นๆ มารวมกันแล้วเอาผลรวมที่ได้นำไปลบกับเลข ลำดับที่ 16 ของรอบนั้น และจะนำผลที่ได้มาเป็นผล
ในการออกรางวัล</li>
                </ul>
                <p>
                    <span class="zone-text-gold">ตัวอย่าง เช่น </span> ผลรวมการยิงเลขทั้งหมด ได้ 2543565 – [34529 ตัวอย่างลำดับ 16] = 2509036  << ผลหลังจากลบ ลำดับที่ 16
                    </br></br>
                    ผลรวม 3 ตัวท้าย จะถูกนำมาออกผลรางวัลเป็น เลข 3 ตัวบน ของหวยยี่กีรอบนั้น ผลรวมหลักพัน และหลักหมื่น จะถูกนำมาออกผลรางวัลเป็น เลข 2 ตัวล่าง ของหวยยี่กีรอบนั้น
                    </br></br>
                    ผลรวม 3 ตัวท้าย จะถูกนำมาออกผลรางวัลเป็น เลข 3 ตัวบน ของหวยยี่กีรอบนั้น ผลรวมหลักพัน และหลักหมื่น จะถูกนำมาออกผลรางวัลเป็น เลข 2 ตัวล่าง ของหวยยี่กีรอบนั้น
                    </br></br>
                    ตามตัวอย่างผลรวมหลังลบลำดับที่ 16 ได้ = 2509036</br>
                    เลขที่ออก 3 ตัวบนคือ = 036 เลขที่ออก 2 ตัวล่างคือ = 09</br>
                    หวยยี่กี ของ CHUDJENBET เปิดรับแทงวันละ 88 รอบ จะออกผลรางวัลทุกๆ 15 นาที เปิดรอบแรกเวลา 06.00 น.
                    จนถึง เวลา 03.45 น. หลังจากหวยยี่กีปิดรับแทงแต่ละรอบ ระบบยิงเลข จะเปิดให้ยิงอีก 2 นาที หลังจากระบบยิงเลขปิด
                    อีก 1 นาที ระบบจะทำการตรวจโพย โดยใช้เวลาการจ่ายเงินประมาณ 2-5 นาที
                    </br></br>
                    ตัวอย่าง เช่น ยี่กีรอบที่ 1 ระบบปิดรับแทงเวลา 06.00 น. ระบบยิงเลขจะสามารถยิงเลขได้จนถึงเวลา 06.02 น. ต่อไประบบ
                    จะทำการตรวจโพยในเวลา 06.03 น. และจะจ่ายเงินสมาชิกทั้งหมดเสร็จภายในเวลาไม่เกิน 06.08 น. เพื่อให้สมาชิกทุกท่าน
                    นำเครดิตไปแทงในรอบถัดไป ซึ่งรอบต่อไปปิดเวลา 06.15 น.
                    </br></br>
                    <span class="zone-text-gold">หมายเหตุ : </span> โปรดตั้งเวลาของอุปกรณ์เข้าเล่นของท่านให้ตรงกับเวลาในเว็บ เพื่อที่ท่านจะได้ไม่สับสนกับเวลาปิดรับ เวลาที่แสดงผลการส่งตัวเลขจะใช้เวลาจากเซิฟเวอร์จริง
                    </br></br>
                    <span class="zone-text-gold">! ! สำคัญมาก ! !</span>
                    หากระบบเกิดปัญหาขัดข้องระหว่างก่อนปิดการร่วมส่งทายผลตัวเลขออกรางวัล จนเป็นสาเหตุทำให้สมาชิกไม่สามารถเข้าใช้งานระบบได้ ทางทีมงานจะทำการตัดสินการออกรางวัลตามความเหมาะสม การตัดสินขึ้นอยู่กับดุลพินิจของทีมงาน
                    ตัวอย่าง เช่น ก่อนหมดเวลาร่วมส่งผลทายผลตัวเลขออกรางวัล 1 นาที ระบบเกิดปัญหาขัดข้องไม่สามารถเข้าใช้งานได้
                    ทำให้สมาชิกไม่สามารถเข้ามาร่วมทายผลตัวเลขได้ กรณีนี้ทางทีมงานจะทำการยกเลิกและคืนเงินเครดิตในรอบนั้นทันที
                    ถึงแม้ว่าก่อนหน้านั้นจะมีสมาชิกยิงเลขเข้ามามากกว่า 20 ลำดับก็ตาม
                    </br></br>
                    <span class="zone-text-gold">***ทีมงาน CHUDJENBET จะตัดสินด้วยความซื่อสัตย์ โปร่งใส และเป็นธรรมที่สุด***</span>
                </p>
                    </div>
            </div>
@endsection
