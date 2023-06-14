<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DapAn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dap_an')->insert(
            [
                [
                    'content' => '23/11/1962',
                    'status' => 0,
                    'ch_id' => 1,
                ], [
                    'content' => '23/11/1963',
                    'status' => 0,
                    'ch_id' => 1,
                ], [
                    'content' => '23/11/1964',
                    'status' => 1,
                    'ch_id' => 1,
                ], [
                    'content' => '23/11/1965',
                    'status' => 0,
                    'ch_id' => 1,
                ],
                [
                    'content' => 'Chân đồng, vai sắt, đánh giỏi, bắn trúng',
                    'status' => 0,
                    'ch_id' => 2,
                ], [
                    'content' => 'Đoàn kết, hiệp đồng, linh hoạt, sáng tạo, đánh giỏi, bắn trúng',
                    'status' => 1,
                    'ch_id' => 2,
                ], [
                    'content' => 'Quân dân đoàn kết, Kiên cường bám trụ, Tự lực tự cường, Anh dũng chiến đấu',
                    'status' => 0,
                    'ch_id' => 2,
                ], [
                    'content' => 'Đoàn kết, hiệp đồng, chủ động, sáng tạo, đánh giỏi, bắn trúng',
                    'status' => 0,
                    'ch_id' => 2,
                ],
                [
                    'content' => 'Quân dân đoàn kết, Trụ bám kiên cường, Tự lực tự cường, Anh dũng chiến đấu',
                    'status' => 0,
                    'ch_id' => 3,
                ], [
                    'content' => 'Đoàn kết, hiệp đồng, linh hoạt, sáng tạo, đánh giỏi, bắn trúng',
                    'status' => 0,
                    'ch_id' => 3,
                ], [
                    'content' => 'Quân dân đoàn kết, Kiên cường bám trụ, Tự lực tự cường, Anh dũng chiến đấu',
                    'status' => 1,
                    'ch_id' => 3,
                ], [
                    'content' => 'Đoàn kết, hiệp đồng, chủ động, sáng tạo, đánh giỏi, bắn trúng',
                    'status' => 0,
                    'ch_id' => 3,
                ],
                [
                    'content' => '10/12/1945',
                    'status' => 1,
                    'ch_id' => 4,
                ], [
                    'content' => '12/12/1945',
                    'status' => 0,
                    'ch_id' => 4,
                ], [
                    'content' => '22/12/1944',
                    'status' => 0,
                    'ch_id' => 4,
                ], [
                    'content' => '11/12/1945',
                    'status' => 0,
                    'ch_id' => 4,
                ],
                [
                    'content' => '2311',
                    'status' => 1,
                    'ch_id' => 5,
                ], [
                    'content' => '2315',
                    'status' => 0,
                    'ch_id' => 5,
                ], [
                    'content' => '10',
                    'status' => 0,
                    'ch_id' => 5,
                ], [
                    'content' => '24',
                    'status' => 0,
                    'ch_id' => 5,
                ],
                [
                    'content' => 'Bản lĩnh chính trị vững vàng, động cơ trong sáng, trách nhiệm cao; Đạo đức, lối sống trong sạch, lành mạnh.',
                    'status' => 0,
                    'ch_id' => 6,
                ], [
                    'content' => 'Có văn hóa, tri thức khoa học, trình độ quân sự, năng lực, phương pháp, tác phong công tác và sức khỏe tốt đáp ứng yêu cầu nhiệm vụ; Thực hành dân chủ, kỷ luật tự giác, nghiêm minh.',
                    'status' => 0,
                    'ch_id' => 6,
                ], [
                    'content' => 'Chăm lo xây dựng đoàn kết nội bộ tốt, tôn trọng, giúp đỡ, gắn bó máu thịt với Nhân dân; có tinh thần quốc tế trong sáng.',
                    'status' => 0,
                    'ch_id' => 6,
                ], [
                    'content' => 'Tất cả các nội dung trên.',
                    'status' => 1,
                    'ch_id' => 6,
                ],
                [
                    'content' => 'Đoàn kết - Dân chủ - Kỷ cương - Sáng tạo - Phát triển',
                    'status' => 1,
                    'ch_id' => 7,
                ], [
                    'content' => 'Đoàn kết - Kỷ cương - Dân chủ - Sáng tạo - Phát triển ',
                    'status' => 0,
                    'ch_id' => 7,
                ], [
                    'content' => 'Dân chủ - Đoàn kết - Kỷ cương - Sáng tạo - Đổi mới ',
                    'status' => 0,
                    'ch_id' => 7,
                ], [
                    'content' => 'Dân chủ - Đoàn kết - Kỷ cương - Sáng tạo - Phát triển',
                    'status' => 0,
                    'ch_id' => 7,
                ],
                [
                    'content' => 'Tiến thẳng lên hiện đại',
                    'status' => 0,
                    'ch_id' => 8,
                ], [
                    'content' => 'Có sức mạnh quân sự mạnh',
                    'status' => 0,
                    'ch_id' => 8,
                ], [
                    'content' => 'Tinh, gọn, mạnh',
                    'status' => 1,
                    'ch_id' => 8,
                ], [
                    'content' => 'Đứng đầu trong khu vực Đông Nam Á',
                    'status' => 0,
                    'ch_id' => 8,
                ],
                [
                    'content' => '4 chuẩn mực	',
                    'status' => 0,
                    'ch_id' => 9,
                ], [
                    'content' => '5 chuẩn mực',
                    'status' => 1,
                    'ch_id' => 9,
                ], [
                    'content' => '6 chuẩn mực	',
                    'status' => 0,
                    'ch_id' => 9,
                ], [
                    'content' => '3 chuẩn mực',
                    'status' => 0,
                    'ch_id' => 9,
                ],
                [
                    'content' => 'Khẩu trang, Khử khuẩn, Khoảng cách, Không tập trung, Khai báo y tế.',
                    'status' => 1,
                    'ch_id' => 10,
                ], [
                    'content' => 'Khẩu trang, Không ăn đồ ăn sống, Khoảng cách, Không tập trung, Khai báo y tế.',
                    'status' => 0,
                    'ch_id' => 10,
                ], [
                    'content' => 'Khẩu trang, Khử khuẩn, Khoảng cách, Không tập trung, Không khai báo y tế.',
                    'status' => 0,
                    'ch_id' => 10,
                ], [
                    'content' => 'Khẩu trang, Khử khuẩn, Khoảng cách, Không hoang mang, Khai báo y tế.',
                    'status' => 0,
                    'ch_id' => 10,
                ],
                [
                    'content' => 'Phê bình, khiển trách, cảnh cáo, giáng cấp, phạt giam, tước danh hiệu quân nhân.',
                    'status' => 0,
                    'ch_id' => 11,
                ], [
                    'content' => 'Khiển trách, cảnh cáo, giáng cấp, cách chức, phạt giam kỷ luật, tước danh hiệu quân nhân.',
                    'status' => 0,
                    'ch_id' => 11,
                ], [
                    'content' => 'Khiển trách, cảnh cáo, giáng cấp bậc quân hàm, giáng chức, cách chức, tước danh hiệu quân nhân.',
                    'status' => 1,
                    'ch_id' => 11,
                ], [
                    'content' => 'Khiển trách, cảnh cáo, giáng cấp bậc quân hàm, giáng chức, cách chức, tước danh hiệu quân nhân, phạt tù.',
                    'status' => 0,
                    'ch_id' => 11,
                ],
                [
                    'content' => 'Vắng mặt trái phép',
                    'status' => 0,
                    'ch_id' => 12,
                ], [
                    'content' => 'Làm nhục, hành hung đồng đội',
                    'status' => 0,
                    'ch_id' => 12,
                ], [
                    'content' => 'Đào ngũ ',
                    'status' => 1,
                    'ch_id' => 12,
                ], [
                    'content' => 'Vi phạm các quy định về trực chiến, trực chỉ huy, trực ban, trực nghiệp vụ',
                    'status' => 0,
                    'ch_id' => 12,
                ],
                [
                    'content' => 'Chống mệnh lệnh',
                    'status' => 1,
                    'ch_id' => 13,
                ], [
                    'content' => 'Chấp hành không nghiêm mệnh lệnh',
                    'status' => 0,
                    'ch_id' => 13,
                ], [
                    'content' => 'Cản trở đồng đội thực hiện nhiệm vụ',
                    'status' => 0,
                    'ch_id' => 13,
                ], [
                    'content' => 'Làm nhục, hành hung người chỉ huy hoặc cấp trên',
                    'status' => 0,
                    'ch_id' => 13,
                ],
                [
                    'content' => 'Chống mệnh lệnh',
                    'status' => 0,
                    'ch_id' => 14,
                ], [
                    'content' => 'Chấp hành không nghiêm mệnh lệnh',
                    'status' => 1,
                    'ch_id' => 14,
                ], [
                    'content' => 'Cản trở đồng đội thực hiện nhiệm vụ',
                    'status' => 0,
                    'ch_id' => 14,
                ], [
                    'content' => 'Làm nhục, hành hung người chỉ huy hoặc cấp trên',
                    'status' => 0,
                    'ch_id' => 14,
                ],
                [
                    'content' => 'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Tẩy rửa vệ sinh sạch sẽ; Test Covid tất cả; Tiêm chủng tại phường/xã.',
                    'status' => 0,
                    'ch_id' => 15,
                ], [
                    'content' => 'Tuân thủ nghiêm 5K; Tổ chức sinh hoạt tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại phường/xã.',
                    'status' => 0,
                    'ch_id' => 15,
                ], [
                    'content' => 'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại phường/xã.',
                    'status' => 1,
                    'ch_id' => 15,
                ], [
                    'content' => 'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại nhà.',
                    'status' => 0,
                    'ch_id' => 15,
                ],
                [
                    'content' => 'Đẩy mạnh  học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh',
                    'status' => 1,
                    'ch_id' => 16,
                ], [
                    'content' => 'Đẩy mạnh học tập và làm theo  phong cách Hồ Chí Minh',
                    'status' => 0,
                    'ch_id' => 16,
                ], [
                    'content' => 'Đẩy mạnh học tập tư tưởng, đạo đức, phong cách Hồ Chí Minh',
                    'status' => 0,
                    'ch_id' => 16,
                ], [
                    'content' => 'Đẩy mạnh việc học tập và làm theo tư tưởng Hồ Chí Minh',
                    'status' => 0,
                    'ch_id' => 16,
                ],
                [
                    'content' => 'Vững mạnh về chính trị. ',
                    'status' => 0,
                    'ch_id' => 17,
                ], [
                    'content' => 'Tổ chức biên chế đúng quy định, duy trì nghiêm túc các chế độ SSCĐ, huấn luyện giỏi; Xây dựng nền nếp chính quy và quản lý kỷ luật tốt',
                    'status' => 0,
                    'ch_id' => 17,
                ], [
                    'content' => 'Bảo đảm tốt hậu cần, tài chính và đời sống bộ đội; Bảo đảm tốt công tác kỹ thuật.  ',
                    'status' => 0,
                    'ch_id' => 17,
                ], [
                    'content' => 'Tất cả các nội dung trên.',
                    'status' => 1,
                    'ch_id' => 17,
                ],
                [
                    'content' => 'Quân đội cùng cả nước chung sức, đồng lòng thi đua phòng, chống và chiến thắng đại dịch COVID-19',
                    'status' => 1,
                    'ch_id' => 18,
                ], [
                    'content' => 'Quân đội thi đua phòng, chống và chiến thắng đại dịch COVID-19',
                    'status' => 0,
                    'ch_id' => 18,
                ], [
                    'content' => 'Quân đội cùng cả nước chung sức thi đua phòng, chống và chiến thắng đại dịch COVID-19',
                    'status' => 0,
                    'ch_id' => 18,
                ], [
                    'content' => 'Quân đội cùng cả nước chung sức phòng, chống và chiến thắng đại dịch COVID-19',
                    'status' => 0,
                    'ch_id' => 18,
                ],
                [
                    'content' => 'Đoàn kết, mẫu mực, kỷ cương, linh hoạt, sáng tạo, Quyết thắng',
                    'status' => 1,
                    'ch_id' => 19,
                ], [
                    'content' => 'Dân chủ, mẫu mực, kỷ cương, sáng tạo, Quyết thắng',
                    'status' => 0,
                    'ch_id' => 19,
                ], [
                    'content' => 'Đoàn kết, dân chủ, kỷ cương, sáng tạo, Quyết thắng',
                    'status' => 0,
                    'ch_id' => 19,
                ], [
                    'content' => 'Đoàn kết, kỷ cương, nêu gương, sáng tạo, Quyết thắng',
                    'status' => 0,
                    'ch_id' => 19,
                ],
                [
                    'content' => '17 đồng chí	',
                    'status' => 0,
                    'ch_id' => 20,
                ], [
                    'content' => '18 đồng chí	',
                    'status' => 0,
                    'ch_id' => 20,
                ], [
                    'content' => '19 đồng chí',
                    'status' => 1,
                    'ch_id' => 20,
                ], [
                    'content' => '20 đồng chí',
                    'status' => 0,
                    'ch_id' => 20,
                ],
                [
                    'content' => 'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu.',
                    'status' => 0,
                    'ch_id' => 21,
                ], [
                    'content' => 'Đẩy mạnh phân cấp, phân quyền đi đôi với tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lực.',
                    'status' => 0,
                    'ch_id' => 21,
                ], [
                    'content' => 'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu; đẩy mạnh phân cấp, phân quyền đi đôi với tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lự',
                    'status' => 1,
                    'ch_id' => 21,
                ], [
                    'content' => 'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu  tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lực.',
                    'status' => 0,
                    'ch_id' => 21,
                ],
                [
                    'content' => '2.350 km',
                    'status' => 0,
                    'ch_id' => 22,
                ], [
                    'content' => '1.749 km',
                    'status' => 0,
                    'ch_id' => 22,
                ], [
                    'content' => '3.260 km',
                    'status' => 0,
                    'ch_id' => 22,
                ], [
                    'content' => '1.137 km',
                    'status' => 1,
                    'ch_id' => 22,
                ],
                [
                    'content' => 'Bộ Tư lệnh Tác chiến không gian mạng trực thuộc Binh chủng Thông Tin.',
                    'status' => 0,
                    'ch_id' => 23,
                ], [
                    'content' => 'Bộ Tư lệnh Tác chiến không gian mạng trực thuộc Bộ Quốc phòng.',
                    'status' => 1,
                    'ch_id' => 23,
                ], [
                    'content' => 'Trung tâm Tác chiến không gian mạng trực thuộc Binh chủng Thông Tin.',
                    'status' => 0,
                    'ch_id' => 23,
                ], [
                    'content' => 'Trung tâm Tác chiến không gian mạng trực thuộc Bộ Quốc phòng. ',
                    'status' => 0,
                    'ch_id' => 23,
                ],
                [
                    'content' => '15/8/2017.',
                    'status' => 1,
                    'ch_id' => 24,
                ], [
                    'content' => '16/8/2017.',
                    'status' => 0,
                    'ch_id' => 24,
                ], [
                    'content' => '17/8/2017.',
                    'status' => 0,
                    'ch_id' => 24,
                ], [
                    'content' => '18/8/2017.',
                    'status' => 0,
                    'ch_id' => 24,
                ],
                [
                    'content' => 'Cần, kiệm, liêm chính.',
                    'status' => 0,
                    'ch_id' => 25,
                ], [
                    'content' => 'Có văn hóa, tri thức khoa học, trình độ quân sự, năng lực, phương pháp, tác phong công tác và sức khỏe tốt đáp ứng yêu cầu nhiệm vụ.',
                    'status' => 1,
                    'ch_id' => 25,
                ], [
                    'content' => 'Tự lập, tự chủ, tự tu dưỡng rèn luyện.',
                    'status' => 0,
                    'ch_id' => 25,
                ], [
                    'content' => 'Tất cả các nội dung trên.',
                    'status' => 0,
                    'ch_id' => 25,
                ],
                [
                    'content' => 'Bản lĩnh chính trị vững vàng, động cơ trong sáng, trách nhiệm cao.',
                    'status' => 1,
                    'ch_id' => 26,
                ], [
                    'content' => 'Tâm trong, trí sáng, hoài bão lớn.',
                    'status' => 0,
                    'ch_id' => 26,
                ], [
                    'content' => 'Tuyệt đối trung thành với Đảng, Nhà nước và nhân dân.',
                    'status' => 0,
                    'ch_id' => 26,
                ], [
                    'content' => 'Tất cả các nội dung trên',
                    'status' => 0,
                    'ch_id' => 26,
                ],
                [
                    'content' => 'Hải Phòng',
                    'status' => 0,
                    'ch_id' => 27,
                ], [
                    'content' => 'Đà Nẵng',
                    'status' => 1,
                    'ch_id' => 27,
                ], [
                    'content' => 'Bình Thuận',
                    'status' => 0,
                    'ch_id' => 27,
                ], [
                    'content' => 'Cà Mau',
                    'status' => 0,
                    'ch_id' => 27,
                ],
                [
                    'content' => 'Quảng Ninh',
                    'status' => 0,
                    'ch_id' => 28,
                ], [
                    'content' => 'Thanh Hóa',
                    'status' => 0,
                    'ch_id' => 28,
                ], [
                    'content' => 'Khánh Hòa',
                    'status' => 1,
                    'ch_id' => 28,
                ], [
                    'content' => 'Bến Tre',
                    'status' => 0,
                    'ch_id' => 28,
                ],
                [
                    'content' => 'An Giang.',
                    'status' => 0,
                    'ch_id' => 29,
                ], [
                    'content' => 'Kiên Giang.',
                    'status' => 0,
                    'ch_id' => 29,
                ], [
                    'content' => 'Đồng Tháp.',
                    'status' => 0,
                    'ch_id' => 29,
                ], [
                    'content' => 'Tất cả các ý trên.',
                    'status' => 1,
                    'ch_id' => 29,
                ],
                [
                    'content' => '02 ',
                    'status' => 0,
                    'ch_id' => 30,
                ], [
                    'content' => '03 ',
                    'status' => 1,
                    'ch_id' => 30,
                ], [
                    'content' => '04',
                    'status' => 0,
                    'ch_id' => 30,
                ], [
                    'content' => '05',
                    'status' => 0,
                    'ch_id' => 30,
                ], [
                    'content' => '2',
                    'status' => 0,
                    'ch_id' => 31,
                ], [
                    'content' => '3',
                    'status' => 1,
                    'ch_id' => 31,
                ], [
                    'content' => '4',
                    'status' => 0,
                    'ch_id' => 31,
                ], [
                    'content' => '5',
                    'status' => 0,
                    'ch_id' => 31,
                ], [
                    'content' => '160 đồng chí Uỷ viên Trung ương chính thức, 40 đồng chí Uỷ viên Trung ương dự khuyết',
                    'status' => 0,
                    'ch_id' => 32,
                ], [
                    'content' => '160 đồng chí Uỷ viên Trung ương chính thức, 20 đồng chí Uỷ viên Trung ương dự khuyết',
                    'status' => 0,
                    'ch_id' => 32,
                ], [
                    'content' => '180 đồng chí Uỷ viên Trung ương chính thức, 40 đồng chí Uỷ viên Trung ương dự khuyết',
                    'status' => 0,
                    'ch_id' => 32,
                ], [
                    'content' => '180 đồng chí Uỷ viên Trung ương chính thức, 20 đồng chí Uỷ viên Trung ương dự khuyết',
                    'status' => 1,
                    'ch_id' => 32,
                ], [
                    'content' => '17 đồng chí',
                    'status' => 0,
                    'ch_id' => 33,
                ], [
                    'content' => '18 đồng chí',
                    'status' => 1,
                    'ch_id' => 33,
                ], [
                    'content' => '19 đồng chí',
                    'status' => 0,
                    'ch_id' => 33,
                ], [
                    'content' => '20 đồng chí',
                    'status' => 0,
                    'ch_id' => 33,
                ], [
                    'content' => '16 đồng chí',
                    'status' => 0,
                    'ch_id' => 34,
                ], [
                    'content' => '17 đồng chí',
                    'status' => 0,
                    'ch_id' => 34,
                ], [
                    'content' => '18 đồng chí',
                    'status' => 0,
                    'ch_id' => 34,
                ], [
                    'content' => '19 đồng chí',
                    'status' => 1,
                    'ch_id' => 34,
                ], [
                    'content' => 'Đại tá Lương Văn Tôn ',
                    'status' => 0,
                    'ch_id' => 35,
                ], [
                    'content' => 'Đại tá Hoàng Tuyển Phong ',
                    'status' => 1,
                    'ch_id' => 35,
                ], [
                    'content' => 'Thượng tá Nguyễn Quốc Cường',
                    'status' => 0,
                    'ch_id' => 35,
                ], [
                    'content' => 'Đại tá Bùi Đình Hoạch',
                    'status' => 0,
                    'ch_id' => 35,
                ], [
                    'content' => 'Đại tá Lương Văn Tôn ',
                    'status' => 1,
                    'ch_id' => 36,
                ], [
                    'content' => 'Đại tá Hoàng Tuyển Phong ',
                    'status' => 0,
                    'ch_id' => 36,
                ], [
                    'content' => 'Thượng tá Nguyễn Quốc Cường',
                    'status' => 0,
                    'ch_id' => 36,
                ], [
                    'content' => 'Trung ta Huỳnh Phước An',
                    'status' => 0,
                    'ch_id' => 36,
                ], [
                    'content' => 'Trung tướng Nguyễn Xuân Dắt',
                    'status' => 1,
                    'ch_id' => 37,
                ], [
                    'content' => 'Thiếu tướng Nguyễn Văn Gấu',
                    'status' => 0,
                    'ch_id' => 37,
                ], [
                    'content' => 'Thiếu tướng Trương Minh Khải',
                    'status' => 0,
                    'ch_id' => 37,
                ], [
                    'content' => 'Thiếu tướng Nguyễn Minh Triều',
                    'status' => 0,
                    'ch_id' => 37,
                ], [
                    'content' => 'Trung tướng Nguyễn Xuân Dắt',
                    'status' => 0,
                    'ch_id' => 38,
                ], [
                    'content' => 'Thiếu tướng Nguyễn Văn Gấu',
                    'status' => 1,
                    'ch_id' => 38,
                ], [
                    'content' => 'Thiếu tướng Trương Minh Khải',
                    'status' => 0,
                    'ch_id' => 38,
                ], [
                    'content' => 'Thiếu tướng Nguyễn Minh Triều',
                    'status' => 0,
                    'ch_id' => 38,
                ],





                [
                    'content' => 'Lòng yêu nước nồng nàn, ý chí tự cường dân tộc.',
                    'status' => 0,
                    'ch_id' => 41,
                ], [
                    'content' => 'Tinh thần đoàn kết, ý thức cộng đồng dân tộc.',
                    'status' => 0,
                    'ch_id' => 41,
                ], [
                    'content' => 'Lòng nhân ái, khoan dung, khát vọng hòa bình, yêu hoà bình.',
                    'status' => 0,
                    'ch_id' => 41,
                ], [
                    'content' => 'Tất cả nội dung trên.',
                    'status' => 1,
                    'ch_id' => 41,
                ], [
                    'content' => 'Một là, lòng yêu nước nồng nàn, ý chí tự cường dân tộc.',
                    'status' => 0,
                    'ch_id' => 42,
                ], [
                    'content' => 'Hai là, tinh thần đoàn kết, ý thức cộng đồng dân tộc.',
                    'status' => 0,
                    'ch_id' => 42,
                ], [
                    'content' => 'Ba là, lòng nhân ái, khoan dung, khát vọng hòa bình, yêu hoà bình.',
                    'status' => 0,
                    'ch_id' => 42,
                ], [
                    'content' => 'Bốn là, lối sống trong sạch, lành mạnh, có văn hóa, trung thực, khiêm tốn, giản dị, lạc quan. ',
                    'status' => 1,
                    'ch_id' => 42,
                ], [
                    'content' => 'Bế Văn Đàn',
                    'status' => 0,
                    'ch_id' => 43,
                ], [
                    'content' => 'Phan Đình Giót',
                    'status' => 0,
                    'ch_id' => 43,
                ], [
                    'content' => 'Tô Vĩnh Diện',
                    'status' => 0,
                    'ch_id' => 43,
                ], [
                    'content' => 'Nguyễn Viết Xuân',
                    'status' => 1,
                    'ch_id' => 43,
                ], [
                    'content' => '20/7/1954',
                    'status' => 0,
                    'ch_id' => 44,
                ], [
                    'content' => '30/4/1975',
                    'status' => 0,
                    'ch_id' => 44,
                ], [
                    'content' => '02/9/1945',
                    'status' => 0,
                    'ch_id' => 44,
                ], [
                    'content' => '02/7/1976',
                    'status' => 1,
                    'ch_id' => 44,
                ], [
                    'content' => 'Lòng yêu nước nồng nàn, ý chí tự cường dân tộc.',
                    'status' => 0,
                    'ch_id' => 45,
                ], [
                    'content' => 'Tinh thần đoàn kết, ý thức cộng đồng dân tộc.',
                    'status' => 0,
                    'ch_id' => 45,
                ], [
                    'content' => 'Lòng nhân ái, khoan dung, khát vọng hòa bình, yêu hoà bình.',
                    'status' => 1,
                    'ch_id' => 45,
                ], [
                    'content' => 'Cần cù, tiết kiệm, lạc quan, khiêm tốn, giản dị, trung thực.',
                    'status' => 0,
                    'ch_id' => 45,
                ], [
                    'content' => 'Quê hương',
                    'status' => 0,
                    'ch_id' => 46,
                ], [
                    'content' => 'Tổ quốc',
                    'status' => 1,
                    'ch_id' => 46,
                ], [
                    'content' => 'Đất nước',
                    'status' => 0,
                    'ch_id' => 46,
                ], [
                    'content' => 'Dân tộc',
                    'status' => 0,
                    'ch_id' => 46,
                ], [
                    'content' => 'Đội quan chiến đấu',
                    'status' => 0,
                    'ch_id' => 47,
                ], [
                    'content' => 'Đội quân công tác',
                    'status' => 0,
                    'ch_id' => 47,
                ], [
                    'content' => 'Đội quân lao động sản xuất',
                    'status' => 0,
                    'ch_id' => 47,
                ], [
                    'content' => 'Tất cả các đáp án trên',
                    'status' => 1,
                    'ch_id' => 47,
                ], [
                    'content' => 'Ngày 01/5/1951 tại xã Tam Kim, huyện Nguyên Bình, tỉnh Cao Bằng',
                    'status' => 0,
                    'ch_id' => 48,
                ], [
                    'content' => 'Ngày 16/7/1946 tại xã Tam Kim, huyện Nguyên Bình, tỉnh Cao Bằng',
                    'status' => 0,
                    'ch_id' => 48,
                ], [
                    'content' => 'Ngày 22/12/1944 tại xã Tam Kim, huyện Nguyên Bình, tỉnh Cao Bằng',
                    'status' => 1,
                    'ch_id' => 48,
                ], [
                    'content' => 'Ngày 22/12/1944 tại thị xã Quảng Yên, tỉnh Quảng Ninh',
                    'status' => 0,
                    'ch_id' => 48,
                ], [
                    'content' => 'Đội quân công tác, đội quân chiến đấu',
                    'status' => 0,
                    'ch_id' => 49,
                ], [
                    'content' => 'Đội quân Chiến đấu, đội quân công tác, đội quân lao động sản xuất',
                    'status' => 1,
                    'ch_id' => 49,
                ], [
                    'content' => 'Đội quân sẵn sàng chiến đấu, đội quân công tác, đội quân lao động sản xuất',
                    'status' => 0,
                    'ch_id' => 49,
                ], [
                    'content' => 'Đội quân Chiến đấu, đội quân lao động sản xuất',
                    'status' => 0,
                    'ch_id' => 49,
                ], [
                    'content' => '3',
                    'status' => 0,
                    'ch_id' => 50,
                ], [
                    'content' => '5',
                    'status' => 0,
                    'ch_id' => 50,
                ], [
                    'content' => '7',
                    'status' => 0,
                    'ch_id' => 50,
                ], [
                    'content' => '9',
                    'status' => 1,
                    'ch_id' => 50,
                ], [
                    'content' => 'Trung thành vô hạn với Tổ quốc Việt Nam xã hội chủ nghĩa, với Đảng, Nhà nước và nhân dân.',
                    'status' => 0,
                    'ch_id' => 51,
                ], [
                    'content' => 'Quyết chiến, quyết thắng, biết đánh và biết thắng.',
                    'status' => 0,
                    'ch_id' => 51,
                ], [
                    'content' => 'Gắn bó máu thịt với nhân dân, quân với dân một ý chí.',
                    'status' => 0,
                    'ch_id' => 51,
                ], [
                    'content' => 'Cần cù, tiết kiệm, lạc quan, khiêm tốn, giản dị, trung thực.',
                    'status' => 1,
                    'ch_id' => 51,
                ], [
                    'content' => '3',
                    'status' => 0,
                    'ch_id' => 52,
                ], [
                    'content' => '5',
                    'status' => 1,
                    'ch_id' => 52,
                ], [
                    'content' => '7 ',
                    'status' => 0,
                    'ch_id' => 52,
                ], [
                    'content' => '9',
                    'status' => 0,
                    'ch_id' => 52,
                ], [
                    'content' => 'Đội du kích Bắc Sơn',
                    'status' => 0,
                    'ch_id' => 53,
                ], [
                    'content' => 'Cứu quốc quân',
                    'status' => 0,
                    'ch_id' => 53,
                ], [
                    'content' => 'Đội Việt Nam Tuyên truyền Giải phóng quân',
                    'status' => 1,
                    'ch_id' => 53,
                ], [
                    'content' => 'Đội Việt Nam Giải phóng quân',
                    'status' => 0,
                    'ch_id' => 53,
                ], [
                    'content' => '3/2/1930',
                    'status' => 1,
                    'ch_id' => 54,
                ], [
                    'content' => '2/9/1945',
                    'status' => 0,
                    'ch_id' => 54,
                ], [
                    'content' => '30/4/1075',
                    'status' => 0,
                    'ch_id' => 54,
                ], [
                    'content' => '22/12/1944',
                    'status' => 0,
                    'ch_id' => 54,
                ], [
                    'content' => 'Đông Dương Cộng sản Đảng, An Nam Cộng sản Đảng và Đông Dương Cộng sản Liên đoàn.',
                    'status' => 1,
                    'ch_id' => 55,
                ], [
                    'content' => 'Đông Dương Lao động Đảng, An Nam Cộng sản Đảng và Đông Dương Cộng sản Liên đoàn.',
                    'status' => 0,
                    'ch_id' => 55,
                ], [
                    'content' => 'Đông Dương Cộng sản Đảng, An Nam Cộng sản Đảng và Hội Việt Nam Cách mạng Thanh niên.',
                    'status' => 0,
                    'ch_id' => 55,
                ], [
                    'content' => 'Đông Dương Cộng sản Đảng, Đông Dương Lao động Đảng, Đông Dương Cộng sản Liên đoàn.',
                    'status' => 0,
                    'ch_id' => 55,
                ], [
                    'content' => 'Chủ tịch Hồ Chí Minh',
                    'status' => 0,
                    'ch_id' => 56,
                ], [
                    'content' => 'Đảng Cộng sản Việt Nam',
                    'status' => 0,
                    'ch_id' => 56,
                ], [
                    'content' => 'Chủ tịch Hồ Chí Minh, Đảng Cộng sản Việt Nam',
                    'status' => 1,
                    'ch_id' => 56,
                ], [
                    'content' => 'Chủ tịch Hồ Chí Minh, Đảng Cộng sản Việt Nam, Nhân dân',
                    'status' => 0,
                    'ch_id' => 56,
                ], [
                    'content' => 'Trình độ',
                    'status' => 0,
                    'ch_id' => 57,
                ], [
                    'content' => 'Nguyên tắc',
                    'status' => 1,
                    'ch_id' => 57,
                ], [
                    'content' => 'Cách thức',
                    'status' => 0,
                    'ch_id' => 57,
                ], [
                    'content' => 'Phương thức',
                    'status' => 0,
                    'ch_id' => 57,
                ], [
                    'content' => 'Việt Bắc',
                    'status' => 0,
                    'ch_id' => 58,
                ], [
                    'content' => 'Bình Giã',
                    'status' => 0,
                    'ch_id' => 58,
                ], [
                    'content' => 'Phai Khắt, Nà Ngần',
                    'status' => 1,
                    'ch_id' => 58,
                ], [
                    'content' => 'Điện Biên',
                    'status' => 0,
                    'ch_id' => 58,
                ], [
                    'content' => '3',
                    'status' => 0,
                    'ch_id' => 59,
                ], [
                    'content' => '4',
                    'status' => 0,
                    'ch_id' => 59,
                ], [
                    'content' => '5',
                    'status' => 1,
                    'ch_id' => 59,
                ], [
                    'content' => '6',
                    'status' => 0,
                    'ch_id' => 59,
                ], [
                    'content' => '3',
                    'status' => 1,
                    'ch_id' => 60,
                ], [
                    'content' => '4',
                    'status' => 0,
                    'ch_id' => 60,
                ], [
                    'content' => '5',
                    'status' => 0,
                    'ch_id' => 60,
                ], [
                    'content' => '6',
                    'status' => 0,
                    'ch_id' => 60,
                ], [
                    'content' => 'Nhận thức đúng, có niềm tin vững chắc và kiên quyết đấu tranh bảo vệ chủ nghĩa Mác - Lênin, tư tưởng Hồ Chí Minh, đường lối, quan điểm của Đảng; bảo vệ nền tảng tư tưởng của Đảng trong quân đội. ',
                    'status' => 0,
                    'ch_id' => 61,
                ], [
                    'content' => 'Giữ vững nguyên tắc Đảng lãnh đạo tuyệt đối, trực tiếp về mọi mặt đối với quân đội ta; các cấp uỷ đảng trong quân đội lãnh đạo đơn vị về mọi mặt.',
                    'status' => 0,
                    'ch_id' => 61,
                ], [
                    'content' => 'Xây dựng tổ chức đảng và đội ngũ cán bộ, đảng viên thực sự vững mạnh, đáp ứng với yêu cầu nhiệm vụ.',
                    'status' => 0,
                    'ch_id' => 61,
                ], [
                    'content' => 'Tất cả các ý kiến trên',
                    'status' => 1,
                    'ch_id' => 61,
                ], [
                    'content' => 'Giai cấp công nhân',
                    'status' => 1,
                    'ch_id' => 62,
                ], [
                    'content' => 'Giai cấp nông dân',
                    'status' => 0,
                    'ch_id' => 62,
                ], [
                    'content' => 'Giai cấp tư sản',
                    'status' => 0,
                    'ch_id' => 62,
                ], [
                    'content' => 'Cả a và b',
                    'status' => 0,
                    'ch_id' => 62,
                ], [
                    'content' => 'Vì độc lập dân tộc và chủ nghĩa xã hội',
                    'status' => 0,
                    'ch_id' => 63,
                ], [
                    'content' => 'Vì mục tiêu “dân giàu, nước mạnh, dân chủ, công bằng, văn minh”',
                    'status' => 0,
                    'ch_id' => 63,
                ], [
                    'content' => 'Sẵn sàng chiến đấu, hy sinh vì độc lập, tự do của Tổ quốc',
                    'status' => 0,
                    'ch_id' => 63,
                ], [
                    'content' => 'Cả a và b',
                    'status' => 1,
                    'ch_id' => 63,
                ], [
                    'content' => '3 chức năng, 3 nhiệm vụ',
                    'status' => 0,
                    'ch_id' => 64,
                ], [
                    'content' => '3 chức năng, 5 nhiệm vụ',
                    'status' => 1,
                    'ch_id' => 64,
                ], [
                    'content' => '5 chức năng, 3 nhiệm vụ',
                    'status' => 0,
                    'ch_id' => 64,
                ], [
                    'content' => '5 chức năng, 5 nhiệm vụ',
                    'status' => 0,
                    'ch_id' => 64,
                ], [
                    'content' => 'Đội quân chiến đấu',
                    'status' => 1,
                    'ch_id' => 65,
                ], [
                    'content' => 'Đội quân công tác',
                    'status' => 0,
                    'ch_id' => 65,
                ], [
                    'content' => 'Đội quân lao động sản xuất',
                    'status' => 0,
                    'ch_id' => 65,
                ], [
                    'content' => 'Tất cả các nội dung trên',
                    'status' => 0,
                    'ch_id' => 65,
                ], [
                    'content' => 'Đội quân chiến đấu',
                    'status' => 0,
                    'ch_id' => 66,
                ], [
                    'content' => 'Đội quân công tác',
                    'status' => 1,
                    'ch_id' => 66,
                ], [
                    'content' => 'Đội quân lao động sản xuất',
                    'status' => 0,
                    'ch_id' => 66,
                ], [
                    'content' => 'Tất cả các nội dung trên',
                    'status' => 0,
                    'ch_id' => 66,
                ], [
                    'content' => 'Đội quân chiến đấu',
                    'status' => 0,
                    'ch_id' => 67,
                ], [
                    'content' => 'Đội quân công tác',
                    'status' => 0,
                    'ch_id' => 67,
                ], [
                    'content' => 'Đội quân lao động sản xuất',
                    'status' => 1,
                    'ch_id' => 67,
                ], [
                    'content' => 'Tất cả các nội dung trên',
                    'status' => 0,
                    'ch_id' => 67,
                ], [
                    'content' => '3',
                    'status' => 0,
                    'ch_id' => 68,
                ], [
                    'content' => '4',
                    'status' => 0,
                    'ch_id' => 68,
                ], [
                    'content' => '5',
                    'status' => 1,
                    'ch_id' => 68,
                ], [
                    'content' => '6',
                    'status' => 0,
                    'ch_id' => 68,
                ], [
                    'content' => 'Sẵn sàng chiến đấu và chiến đấu thắng lợi',
                    'status' => 1,
                    'ch_id' => 69,
                ], [
                    'content' => 'Huấn luyện, xây dựng quân đội, đơn vị vững mạnh toàn diện “Mẫu mực, tiêu biểu”',
                    'status' => 0,
                    'ch_id' => 69,
                ], [
                    'content' => 'Tích cực tham gia lao động sản xuất, góp phần phát triển kinh tế, văn hóa, xã hội, cải thiện đời sống bộ đội',
                    'status' => 0,
                    'ch_id' => 69,
                ], [
                    'content' => 'Cả 3 nội dung trên',
                    'status' => 0,
                    'ch_id' => 69,
                ], [
                    'content' => 'Sẵn sàng chiến đấu và chiến đấu thắng lợi',
                    'status' => 0,
                    'ch_id' => 70,
                ], [
                    'content' => 'Huấn luyện, xây dựng quân đội, đơn vị vững mạnh toàn diện “Mẫu mực, tiêu biểu”',
                    'status' => 1,
                    'ch_id' => 70,
                ], [
                    'content' => 'Tích cực tham gia lao động sản xuất, góp phần phát triển kinh tế, văn hóa, xã hội, cải thiện đời sống bộ đội',
                    'status' => 0,
                    'ch_id' => 70,
                ], [
                    'content' => 'Cả 3 nội dung trên',
                    'status' => 0,
                    'ch_id' => 70,
                ], [
                    'content' => 'Sẵn sàng chiến đấu và chiến đấu thắng lợi',
                    'status' => 0,
                    'ch_id' => 71,
                ], [
                    'content' => 'Huấn luyện, xây dựng quân đội, đơn vị vững mạnh toàn diện “Mẫu mực, tiêu biểu”',
                    'status' => 0,
                    'ch_id' => 71,
                ], [
                    'content' => 'Tích cực tham gia lao động sản xuất, góp phần phát triển kinh tế, văn hóa, xã hội, cải thiện đời sống bộ đội',
                    'status' => 1,
                    'ch_id' => 71,
                ], [
                    'content' => 'Cả 3 nội dung trên',
                    'status' => 0,
                    'ch_id' => 71,
                ], [
                    'content' => '3',
                    'status' => 1,
                    'ch_id' => 72,
                ], [
                    'content' => '4',
                    'status' => 0,
                    'ch_id' => 72,
                ], [
                    'content' => '5',
                    'status' => 0,
                    'ch_id' => 72,
                ], [
                    'content' => '6',
                    'status' => 0,
                    'ch_id' => 72,
                ], [
                    'content' => '3',
                    'status' => 1,
                    'ch_id' => 73,
                ], [
                    'content' => '5',
                    'status' => 0,
                    'ch_id' => 73,
                ], [
                    'content' => '6',
                    'status' => 0,
                    'ch_id' => 73,
                ], [
                    'content' => '8',
                    'status' => 0,
                    'ch_id' => 73,
                ], [
                    'content' => '3',
                    'status' => 0,
                    'ch_id' => 74,
                ], [
                    'content' => '4',
                    'status' => 0,
                    'ch_id' => 74,
                ], [
                    'content' => '5',
                    'status' => 1,
                    'ch_id' => 74,
                ], [
                    'content' => '6',
                    'status' => 0,
                    'ch_id' => 74,
                ], [
                    'content' => 'Cơ bản, đồng bộ, thống nhất, chuyên sâu',
                    'status' => 0,
                    'ch_id' => 75,
                ], [
                    'content' => 'Cơ bản, thiết thực, vững chắc',
                    'status' => 1,
                    'ch_id' => 75,
                ], [
                    'content' => 'Chất lượng, thiết thực, hiệu quả, sát thực tế',
                    'status' => 0,
                    'ch_id' => 75,
                ], [
                    'content' => 'Chất lượng, thiết thực, hiệu quả, tập trung, có trọng tâm, trọng điểm',
                    'status' => 0,
                    'ch_id' => 75,
                ], [
                    'content' => 'Thống nhất ý chí và hành động, cùng chung mục tiêu, lý tưởng chiến đấu vì độc lập dân tộc và chủ nghĩa xã hội, vì hạnh phúc của nhân dân.',
                    'status' => 1,
                    'ch_id' => 76,
                ], [
                    'content' => 'Quân đội luôn gắn bó máu thịt với nhân dân, quân với dân một ý chí, quan hệ quân với dân như cá với nước.',
                    'status' => 0,
                    'ch_id' => 76,
                ], [
                    'content' => 'Gắn bó thủy chung, vô tư, trong sáng, chí nghĩa, chí tình với quân đội và nhân dân các nước anh em, bè bạn quốc tế.',
                    'status' => 0,
                    'ch_id' => 76,
                ], [
                    'content' => 'Tất cả các ý trên.',
                    'status' => 0,
                    'ch_id' => 76,
                ], [
                    'content' => 'Thống nhất ý chí và hành động, cùng chung mục tiêu, lý tưởng chiến đấu vì độc lập dân tộc và chủ nghĩa xã hội, vì hạnh phúc của nhân dân.',
                    'status' => 0,
                    'ch_id' => 77,
                ], [
                    'content' => 'Quân đội luôn gắn bó máu thịt với nhân dân, quân với dân một ý chí, quan hệ quân với dân như cá với nước.',
                    'status' => 1,
                    'ch_id' => 77,
                ], [
                    'content' => 'Gắn bó thủy chung, vô tư, trong sáng, chí nghĩa, chí tình với quân đội và nhân dân các nước anh em, bè bạn quốc tế.',
                    'status' => 0,
                    'ch_id' => 77,
                ], [
                    'content' => 'Tất cả các ý trên.',
                    'status' => 0,
                    'ch_id' => 77,
                ], [
                    'content' => 'Thống nhất ý chí và hành động, cùng chung mục tiêu, lý tưởng chiến đấu vì độc lập dân tộc và chủ nghĩa xã hội, vì hạnh phúc của nhân dân.',
                    'status' => 0,
                    'ch_id' => 78,
                ], [
                    'content' => 'Quân đội luôn gắn bó máu thịt với nhân dân, quân với dân một ý chí, quan hệ quân với dân như cá với nước.',
                    'status' => 0,
                    'ch_id' => 78,
                ], [
                    'content' => 'Gắn bó thủy chung, vô tư, trong sáng, chí nghĩa, chí tình với quân đội và nhân dân các nước anh em, bè bạn quốc tế.',
                    'status' => 1,
                    'ch_id' => 78,
                ], [
                    'content' => 'Tất cả các ý trên.',
                    'status' => 0,
                    'ch_id' => 78,
                ], [
                    'content' => 'Cùng ăn, cùng ở, cùng làm, cùng lao động sản xuất',
                    'status' => 0,
                    'ch_id' => 79,
                ], [
                    'content' => 'Cùng ăn, cùng ở, cùng làm, cùng phát triển kinh tế',
                    'status' => 0,
                    'ch_id' => 79,
                ], [
                    'content' => 'Cùng ăn, cùng ở, cùng làm, cùng nói tiếng dân tộc',
                    'status' => 1,
                    'ch_id' => 79,
                ], [
                    'content' => 'Cùng ăn, cùng ở, cùng làm, cùng giao lưu văn hóa',
                    'status' => 0,
                    'ch_id' => 79,
                ], [
                    'content' => 'Đoàn kết nội bộ quân đội',
                    'status' => 0,
                    'ch_id' => 80,
                ], [
                    'content' => 'Đoàn kết quân dân',
                    'status' => 0,
                    'ch_id' => 80,
                ], [
                    'content' => 'Đoàn kết quốc tế',
                    'status' => 1,
                    'ch_id' => 80,
                ], [
                    'content' => 'Tất cả các nội dung trên',
                    'status' => 0,
                    'ch_id' => 80,
                ], [
                    'content' => 'Dân vận',
                    'status' => 1,
                    'ch_id' => 81,
                ], [
                    'content' => 'Chính sách',
                    'status' => 0,
                    'ch_id' => 81,
                ], [
                    'content' => 'Tư tưởng',
                    'status' => 0,
                    'ch_id' => 81,
                ], [
                    'content' => 'Tổ chức',
                    'status' => 0,
                    'ch_id' => 81,
                ], [
                    'content' => 'quyền là chủ',
                    'status' => 0,
                    'ch_id' => 82,
                ], [
                    'content' => 'quyền dân chủ',
                    'status' => 0,
                    'ch_id' => 82,
                ], [
                    'content' => 'quyền làm chủ',
                    'status' => 1,
                    'ch_id' => 82,
                ], [
                    'content' => 'quyền bình đẳng',
                    'status' => 0,
                    'ch_id' => 82,
                ], [
                    'content' => 'Nhà nước xã hội chủ nghĩa',
                    'status' => 1,
                    'ch_id' => 83,
                ], [
                    'content' => 'Nhà nước tư bản',
                    'status' => 0,
                    'ch_id' => 83,
                ], [
                    'content' => 'Giai cấp công nhân',
                    'status' => 0,
                    'ch_id' => 83,
                ], [
                    'content' => 'Giai cấp nông dân',
                    'status' => 0,
                    'ch_id' => 83,
                ], [
                    'content' => 'Chính trị, quân sự, kinh tế - đời sống, văn hóa - tinh thần',
                    'status' => 1,
                    'ch_id' => 84,
                ], [
                    'content' => 'Chính trị - tư tưởng, quân sự, lao động sản xuất',
                    'status' => 0,
                    'ch_id' => 84,
                ], [
                    'content' => 'Chính trị, quân sự, kinh tế, văn hóa - văn nghệ',
                    'status' => 0,
                    'ch_id' => 84,
                ], [
                    'content' => 'Chính trị, quân sự, hậu cần, kĩ thuật',
                    'status' => 0,
                    'ch_id' => 84,
                ], [
                    'content' => 'Giai cấp công nhân',
                    'status' => 0,
                    'ch_id' => 85,
                ], [
                    'content' => 'Đảng Cộng sản Việt Nam',
                    'status' => 0,
                    'ch_id' => 85,
                ], [
                    'content' => 'a, b đều đúng',
                    'status' => 1,
                    'ch_id' => 85,
                ], [
                    'content' => 'a,b đều sai',
                    'status' => 0,
                    'ch_id' => 85,
                ], [
                    'content' => 'Kỷ luật sắt',
                    'status' => 0,
                    'ch_id' => 86,
                ], [
                    'content' => 'Tự giác, nghiêm minh',
                    'status' => 1,
                    'ch_id' => 86,
                ], [
                    'content' => 'Chặt chẽ, thống nhất cao',
                    'status' => 0,
                    'ch_id' => 86,
                ], [
                    'content' => 'Tự giác, nghiêm túc',
                    'status' => 0,
                    'ch_id' => 86,
                ], [
                    'content' => 'Vũ khí mới',
                    'status' => 0,
                    'ch_id' => 87,
                ], [
                    'content' => 'Đoàn kết tốt',
                    'status' => 0,
                    'ch_id' => 87,
                ], [
                    'content' => 'Huấn luyện giỏi',
                    'status' => 0,
                    'ch_id' => 87,
                ], [
                    'content' => 'Kỷ luật nghiêm ',
                    'status' => 1,
                    'ch_id' => 87,
                ], [
                    'content' => 'Sinh hoạt đối thoại dân chủ',
                    'status' => 0,
                    'ch_id' => 88,
                ], [
                    'content' => 'Sinh hoạt tài chính công khai',
                    'status' => 0,
                    'ch_id' => 88,
                ], [
                    'content' => 'Ngày Chính trị và Văn hóa tinh thần',
                    'status' => 0,
                    'ch_id' => 88,
                ], [
                    'content' => 'Tất cả các nội dung trên',
                    'status' => 1,
                    'ch_id' => 88,
                ], [
                    'content' => 'Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm',
                    'status' => 0,
                    'ch_id' => 89,
                ], [
                    'content' => 'Quản lý, khai thác vũ khí, trang bị tốt, bền, an toàn, tiết kiệm và an toàn giao thông',
                    'status' => 0,
                    'ch_id' => 89,
                ], [
                    'content' => 'Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm và an toàn giao thông',
                    'status' => 1,
                    'ch_id' => 89,
                ], [
                    'content' => 'Tất cả đều sai',
                    'status' => 0,
                    'ch_id' => 89,
                ], [
                    'content' => '14/3/1995',
                    'status' => 0,
                    'ch_id' => 90,
                ], [
                    'content' => '10/01/1998',
                    'status' => 1,
                    'ch_id' => 90,
                ], [
                    'content' => '15/5/ 2016',
                    'status' => 0,
                    'ch_id' => 90,
                ], [
                    'content' => '08/7/2016',
                    'status' => 0,
                    'ch_id' => 90,
                ], [
                    'content' => '3',
                    'status' => 0,
                    'ch_id' => 91,
                ], [
                    'content' => '4',
                    'status' => 1,
                    'ch_id' => 91,
                ], [
                    'content' => '5',
                    'status' => 0,
                    'ch_id' => 91,
                ], [
                    'content' => '6',
                    'status' => 0,
                    'ch_id' => 91,
                ], [
                    'content' => 'Quản lý tốt; Khai thác tốt, bền; An toàn; Tiết kiệm',
                    'status' => 1,
                    'ch_id' => 92,
                ], [
                    'content' => 'Quản lý tốt; Khai thác tốt, bền; Tiết kiệm; An toàn giao thông',
                    'status' => 0,
                    'ch_id' => 92,
                ], [
                    'content' => 'Quản lý tốt; Khai thác tốt, bền; An toàn; Tiết kiệm và An toàn giao thông',
                    'status' => 0,
                    'ch_id' => 92,
                ], [
                    'content' => 'Tất cả đều sai',
                    'status' => 0,
                    'ch_id' => 92,
                ], [
                    'content' => 'Đội quân chiến đấu',
                    'status' => 0,
                    'ch_id' => 93,
                ], [
                    'content' => 'Đội quân công tác',
                    'status' => 0,
                    'ch_id' => 93,
                ], [
                    'content' => 'Đội quân lao động sản xuất',
                    'status' => 1,
                    'ch_id' => 93,
                ], [
                    'content' => 'Tất cả đều sai',
                    'status' => 0,
                    'ch_id' => 93,
                ],
            ]
        );
    }
}
