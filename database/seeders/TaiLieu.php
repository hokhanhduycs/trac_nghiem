<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiLieu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chuong')->insert([
            ['id'=>2,
            'title'=>'Giáo dục chính trị Chiến sĩ mới'],
            ['id'=>3,
            'title'=>'Giáo dục chính trị Hạ sĩ quan, Binh sĩ'],
            ['id'=>4,
            'title'=>'Bài giảng lí luận chính trị cho ĐVTN'],
            ['id'=>5,
            'title'=>'Thư viện pháp luật'],
            ['id'=>6,
            'title'=>'Kể chuyện Bác Hồ'],
            ['id'=>8,
            'title'=>'Các trò chơi ngày nghỉ'],
        ]);
        //2
        for ($i = 1; $i <= 6; $i++) {
            DB::table('tai_lieu')->insert(
                [
                    'chuong_id'=>2,
                    'title' => 'Bài ' . $i,
                    'content' => 'data/2. Giáo dục chính trị Chiến sĩ mới/Bài ' . $i . '.pdf'
                ],
            );
        }
        //3
        for ($i = 1; $i <= 12; $i++) {
            DB::table('tai_lieu')->insert(
                [
                    'chuong_id'=>3,
                    'title' => 'Bài ' . $i,
                    'content' => 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài ' . $i . '.pdf'
                ],
            );
        }
        //4
        for ($i = 1; $i <= 4; $i++) {
            DB::table('tai_lieu')->insert(
                [
                    'chuong_id'=>4,
                    'title' => 'BÀI ' . $i,
                    'content' => 'data/4. Bài giảng lí luận chính trị cho ĐVTN/BÀI ' . $i . '.pdf'
                ],
            );
        }
        //5
        DB::table('tai_lieu')->insert(
            [
                ['chuong_id'=>5,
                    'title' => 'Bộ luật Dân sự năm 2015',
                    'content' => 'data/5. Thư viện pháp luật/Bộ luật Dân sự năm 2015.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => '
                Bộ luật Hình sự năm 2015',
                    'content' => 'data/5. Thư viện pháp luật/
                Bộ luật Hình sự năm 2015.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Bộ luật Tố tụng Dân sự năm 2015 ',
                    'content' => 'data/5. Thư viện pháp luật/Bộ luật Tố tụng Dân sự năm 2015.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật An ninh mạng năm 2018 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật An ninh mạng năm 2018.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật An toàn thông tin mạng năm 2015 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật An toàn thông tin mạng năm 2015.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Bảo vệ bí mật nhà nước năm 2018 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Bảo vệ bí mật nhà nước năm 2018.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Biên phòng Việt Nam năm 2020 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Biên phòng Việt Nam năm 2020.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Cảnh sát biển Việt Nam năm 2018 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Cảnh sát biển Việt Nam năm 2018.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật cư trú năm 2020 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật cư trú năm 2020.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Nghĩa vụ quân sự năm 2015 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Nghĩa vụ quân sự năm 2015.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Phòng, chống tham nhũng năm 2018 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Phòng, chống tham nhũng năm 2018.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Quản lý, sử dụng tài sản công năm 2017 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Quản lý, sử dụng tài sản công năm 2017.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Quản lý, sử dụng vũ khí, vật liệu nổ và công cụ hỗ trợ năm 2017 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Quản lý, sử dụng vũ khí, vật liệu nổ và công cụ hỗ trợ năm 2017.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Quân nhân chuyên nghiệp, công nhân và viên chức quốc phòng năm 2015 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Quân nhân chuyên nghiệp, công nhân và viên chức quốc phòng năm 2015.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Quốc phòng năm 2018 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Quốc phòng năm 2018.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Tố cáo năm 2018 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Tố cáo năm 2018.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Luật Tổ chức Chính phủ năm 2015 ',
                    'content' => 'data/5. Thư viện pháp luật/Luật Tổ chức Chính phủ năm 2015.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'QUỐC HỘI ',
                    'content' => 'data/5. Thư viện pháp luật/QUỐC HỘI.pdf'
                ],
                ['chuong_id'=>5,
                    'title' => 'Thông tư 16 ',
                    'content' => 'data/5. Thư viện pháp luật/Thông tư 16.pdf'
                ],
            ]
        );

        //6
        DB::table('tai_lieu')->insert(
            [
                ['chuong_id'=>6,
                    'title' => 'Ai ăn thì người ấy trả tiền',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Ai ăn thì người ấy trả tiền.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Ai cho các chú may thêm',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Ai cho các chú may thêm.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Ai là nông dân của Bác',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Ai là nông dân của Bác.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Ăn no rồi hãy đến làm việc',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Ăn no rồi hãy đến làm việc.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác có phải là vua đâu',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác có phải là vua đâu.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác dạy “Gạn đục khơi trong” mà học người ta',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác dạy “Gạn đục khơi trong” mà học người ta.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ dạy học ở Pắc Bó',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ dạy học ở Pắc Bó.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ là thế đấy',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ là thế đấy.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ tắm cho trẻ con ở Việt Bắc',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ tắm cho trẻ con ở Việt Bắc.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ tăng gia rau cải',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ tăng gia rau cải.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ tiếp dân',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ tiếp dân.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ và ngư dân biển Sầm sơn',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ và ngư dân biển Sầm sơn.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ viết bài báo',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ viết bài báo.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ viết bài báo “Nâng cao đạo đức cách mạng, quét sạch chủ nghĩa cá nhân”',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ viết bài báo “Nâng cao đạo đức cách mạng, quét sạch chủ nghĩa cá nhân”.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác Hồ với Bộ đội ở Đền Hùng',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác Hồ với Bộ đội ở Đền Hùng.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bác khuyên mấy chú Nam Bộ chi tiêu theo lối pha trà',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bác khuyên mấy chú Nam Bộ chi tiêu theo lối pha trà.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bài học dựa vào dân',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bài học dựa vào dân.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bài học quyết tâm',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bài học quyết tâm.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bản yêu sách của nhân dân An Nam gửi Hội nghị Vécxây',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bản yêu sách của nhân dân An Nam gửi Hội nghị Vécxây.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bát chè sẻ đôi',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bát chè sẻ đôi.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Bữa cơm trên đường công tác',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Bữa cơm trên đường công tác.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Cả đất nước Việt Nam là gia đình tôi',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Cả đất nước Việt Nam là gia đình tôi.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Các chú có báo không',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Các chú có báo không.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Cách ứng đáp mẫn tiệp của Chủ tịch Hồ Chí Minh',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Cách ứng đáp mẫn tiệp của Chủ tịch Hồ Chí Minh.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Cái áo trấn thủ',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Cái áo trấn thủ.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Cái gì tạo nên biển cả',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Cái gì tạo nên biển cả.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Cán bộ phải thường xuyên tự phê bình để tiến bộ',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Cán bộ phải thường xuyên tự phê bình để tiến bộ.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Cần mẫn',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Cần mẫn.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Câu chuyện về ba chiếc ba lô',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Câu chuyện về ba chiếc ba lô.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Câu chuyện xây dựng hội trường',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Câu chuyện xây dựng hội trường.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Chính quyền của dân',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Chính quyền của dân.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Chớ bỏ qua những việc mà tưởng là tầm thường',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Chớ bỏ qua những việc mà tưởng là tầm thường.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Chú còn trẻ, chú vào hầm trước đi',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Chú còn trẻ, chú vào hầm trước đi.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Chú ngã có đau không',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Chú ngã có đau không.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Chú ra xem Bộ đội có ướt không',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Chú ra xem Bộ đội có ướt không.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Chủ tịch Hồ Chí Minh và câu chuyện kỷ cương, phép nước',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Chủ tịch Hồ Chí Minh và câu chuyện kỷ cương, phép nước.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Chủ tịch nước cũng không có đặc quyền',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Chủ tịch nước cũng không có đặc quyền.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Chuyện người sửa đôi dép Bác Hồ',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Chuyện người sửa đôi dép Bác Hồ.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Cứ gọi tôi là Ba như ngày trước',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Cứ gọi tôi là Ba như ngày trước.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Dân xin nước, cán bộ cho lửa',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Dân xin nước, cán bộ cho lửa.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Để Bác quạt',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Để Bác quạt.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Dĩ công vi thượng',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Dĩ công vi thượng.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Đi dự hội nghị',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Đi dự hội nghị.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Đón vua hay đón Bác',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Đón vua hay đón Bác.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Dốt mà hay',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Dốt mà hay.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Gọi bằng Bác chứ',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Gọi bằng Bác chứ.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Hai bàn tay',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Hai bàn tay.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Kiên trì chống lại tuổi già và bệnh tật',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Kiên trì chống lại tuổi già và bệnh tật.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Mãi mãi là tấm gương sáng',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Mãi mãi là tấm gương sáng.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Một lần nhớ mãi',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Một lần nhớ mãi.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Một lòng tin ở Nhân dân',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Một lòng tin ở Nhân dân.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Một mình Bác có 4 “Chánh Văn Phòng”',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Một mình Bác có 4 “Chánh Văn Phòng”.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Một ngày làm việc của Bác',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Một ngày làm việc của Bác.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Ngăn nắp và trật tự',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Ngăn nắp và trật tự.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Ngày tết nghĩ về tấm gương giản dị và tiết kiệm của Bác Hồ',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Ngày tết nghĩ về tấm gương giản dị và tiết kiệm của Bác Hồ.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Nghĩa nặng tình sâu',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Nghĩa nặng tình sâu.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Người Pháp, người Mỹ nói về Bác',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Người Pháp, người Mỹ nói về Bác.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Người sáng lập Đảng',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Người sáng lập Đảng.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Nước nóng nước nguội',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Nước nóng nước nguội.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Phải có tình đồng chí thương yêu lẫn nhau',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Phải có tình đồng chí thương yêu lẫn nhau.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Phải lắng nghe ý kiến của quần chúng',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Phải lắng nghe ý kiến của quần chúng.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Phải tìm trong dân chứ',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Phải tìm trong dân chứ.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Phong cách ứng xử thân tình',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Phong cách ứng xử thân tình.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Quyết chí ra đi',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Quyết chí ra đi.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Ra đi Bác dặn còn non nước',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Ra đi Bác dặn còn non nước.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Sự phân công',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Sự phân công.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Ta cùng đi cho vui',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Ta cùng đi cho vui.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Tài ngoại giao của Bác Hồ với Trung Quốc Và Tưởng Giới Thạch',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Tài ngoại giao của Bác Hồ với Trung Quốc Và Tưởng Giới Thạch.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Tài sản của dân tại sao tìm cách đút túi',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Tài sản của dân tại sao tìm cách đút túi.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Tấm huân chương cao quý',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Tấm huân chương cao quý.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Tấm lòng Bác Hồ với chiến sĩ',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Tấm lòng Bác Hồ với chiến sĩ.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Thà chặt một cành sâu cho cây xanh tốt',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Thà chặt một cành sâu cho cây xanh tốt.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Thăm nhà máy dệt mới khánh thành',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Thăm nhà máy dệt mới khánh thành.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Tháng Tám năm 1945 ở Hà Nội',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Tháng Tám năm 1945 ở Hà Nội.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Thành khẩn tiếp thu sự phê bình của đồng chí là cái thước đo đạo đức cách mạng, tinh thần vì dân vì nước của mọi cán bộ',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Thành khẩn tiếp thu.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Thanh niên phải gương mẩu trong đoàn kết và kỷ luật',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Thanh niên phải gương mẩu trong đoàn kết và kỷ luật.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Thiếu một đức thì không thành người',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Thiếu một đức thì không thành người.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Thời gian quý báu lắm',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Thời gian quý báu lắm.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Tôi học được phương pháp phê bình của Bác',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Tôi học được phương pháp phê bình của Bác.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Tôi là người cộng sản như thế này',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Tôi là người cộng sản như thế này.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Trong ngõ hẹp CôngPoanh',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Trong ngõ hẹp CôngPoanh.pdf'
                ],
                ['chuong_id'=>6,
                    'title' => 'Vài nét về cuộc sống giản của Bác ở Phủ Chủ tịch',
                    'content' => 'data/6. Kể chuyện Bác Hồ/Vài nét về cuộc sống giản của Bác ở Phủ Chủ tịch.pdf'
                ],
            ]
        );

        //8
        for ($i = 1; $i < 6; $i++) {
            DB::table('tai_lieu')->insert(
                [
                    'chuong_id'=>8,
                    'title' => 'CÁC TRÒ CHƠI NGÀY NGHỈ',
                    'content' => 'data/8. Các trò chơi ngày nghỉ/CÁC TRÒ CHƠI NGÀY NGHỈ.pdf'
                ],
            );
        }
    }
}
