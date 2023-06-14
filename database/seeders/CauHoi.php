<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CauHoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
            [
                'ch_id' => 1,
                'content' => 'Đồng chí cho biết ngày truyền thống của Lữ đoàn Pháo binh 6?',
            ], [
                'ch_id' => 2,
                'content' => 'Đồng chí hãy cho biết nội dung nào dưới đây là nội dung chữ vàng truyền thống của Lữ đoàn Pháo binh 6?',
            ], [
                'ch_id' => 3,
                'content' => 'Đồng chí hãy cho biết nội dung nào dưới đây thể hiện chữ vàng truyền thống của Quân khu 9?',
            ], [
                'ch_id' => 4,
                'content' => 'Quân khu 9 được thành lập ngày, tháng, năm nào?',
            ], [
                'ch_id' => 5,
                'content' => 'Đồng chí cho biết Tiểu đoàn đầu tiên của Lữ đoàn 6?',
            ], [
                'ch_id' => 6,
                'content' => 'Đồng chí hãy cho biết những nội dung nào dưới đây là chuẩn mực “Bộ đội Cụ Hồ” theo Chỉ thị 855 của Quân ủy Trung ương?',
            ], [
                'ch_id' => 7,
                'content' => 'Đồng chí hãy cho biết phương châm Đại hội XIII của Đảng ?',
            ], [
                'ch_id' => 8,
                'content' => 'Đồng chí hãy cho biết Đại hội XIII của Đảng xác định phương hướng xây dựng Quân đội nhân dân Việt Nam đến năm 2025 như thế nào?',
            ], [
                'ch_id' => 9,
                'content' => 'Có bao nhiêu chuẩn mực xứng danh “Bộ đội Cụ Hồ”?',
            ], [
                'ch_id' => 10,
                'content' => 'Đồng chí hãy cho biết Thông điệp 5K của Bộ Y tế trong phòng, chống dịch bệnh Covid-19 là gì?',
            ], [
                'ch_id' => 11,
                'content' => 'Đồng chí hãy cho biết theo Thông tư số 16/2020/TT-BQP của Bộ Quốc phòng quy định những hình thức xử lý kỷ luật nào đối với HSQ - BS?',
            ], [
                'ch_id' => 12,
                'content' => 'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 20 xử lý quân nhân vi phạm về?',
            ], [
                'ch_id' => 13,
                'content' => 'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 13 xử lý quân nhân vi phạm về tội?',
            ], [
                'ch_id' => 14,
                'content' => 'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 14 xử lý quân nhân vi phạm về tội?',
            ], [
                'ch_id' => 15,
                'content' => 'Đồng chí hãy cho biết Thông điệp thực hiện 5T của Bộ Y tế trong phòng chống dịch bệnh Covid-19 là gì?',
            ], [
                'ch_id' => 16,
                'content' => 'Chỉ thị 05-CT/TW của Bộ Chính trị có nội dung gì?',
            ], [
                'ch_id' => 17,
                'content' => 'Những nội dung nào dưới đây là tiêu chuẩn xây dựng đơn vị VMTD theo chỉ thị 917/CT-BQP của Bộ trưởng Bộ Quốc phòng?',
            ], [
                'ch_id' => 18,
                'content' => 'Tên chủ đề phong trào thi đua phòng chống Covid-19?',
            ], [
                'ch_id' => 19,
                'content' => 'Phong trào thi đua Quyết thắng năm 2021 tên là gì?',
            ], [
                'ch_id' => 20,
                'content' => 'Có bao nhiêu đồng chí nữ là ủy viên Ban Chấp hành Trung ương khóa XIII được bầu tại Đại hội XIII của Đảng?',
            ], [
                'ch_id' => 21,
                'content' => 'Một trong ba giải pháp đột phá của công tác xây dựng Đảng được Đại hội XIII của Đảng đề ra là?',
            ], [
                'ch_id' => 22,
                'content' => 'Biên giới Việt Nam – Campuchia dài bao nhiêu km?',
            ], [
                'ch_id' => 23,
                'content' => 'Bộ Tư lệnh 86 là tên gọi viết tắt của?',
            ], [
                'ch_id' => 24,
                'content' => 'Bộ Tư lệnh 86 được thành lập vào nagỳ tháng năm nào?',
            ], [
                'ch_id' => 25,
                'content' => 'Đâu là phẩm chất cần có của “Bộ đội Cụ Hồ” thời kỳ mới?',
            ], [
                'ch_id' => 26,
                'content' => 'Một trong những chuẩn mực phẩm chất “Bộ đội Cụ Hồ” trong thời kỳ mới theo Chỉ thị 855-CT/QUTW của Thường vụ Quân ủy Trung ương.',
            ], [
                'ch_id' => 27,
                'content' => 'Quần đảo Hoàng Sa thuộc tỉnh (thành phố) nào của Việt Nam?',
            ], [
                'ch_id' => 28,
                'content' => 'Quần đảo Trường Sa thuộc tỉnh (thành phố) nào của Việt Nam?',
            ], [
                'ch_id' => 29,
                'content' => 'Trong các tỉnh sau tỉnh nào có đường biên giới giáp Campuchia? ',
            ], [
                'ch_id' => 30,
                'content' => 'An Giang có bao nhiêu cửa khẩu quốc tế với Campuchia?',
            ],
            [
                'ch_id' => 31,
                'content' => 'Đại hội đại biểu toàn quốc lần thứ XIII của Đảng đã đề ra bao nhiêu đột phá chiến lược?',
            ],
            [
                'ch_id' => 32,
                'content' => 'Ban Chấp hành Trung ương Đảng khoá XIII được bầu tại đại hội gồm bao nhiêu đồng chí?',
            ],
            [
                'ch_id' => 33,
                'content' => 'Hội nghị lần thứ nhất BCH Trung ương Đảng khóa XIII đã bầu ra Bộ Chính trị gồm bao nhiêu đồng chí? ',
            ],
            [
                'ch_id' => 34,
                'content' => 'Ban Chấp hành Trung ương đã bầu Ủy ban Kiểm tra Trung ương gồm bao nhiêu đồng chí?',
            ],
            [
                'ch_id' => 35,
                'content' => 'Chính ủy Lữ đoàn 6 hiện nay là ai?',
            ],
            [
                'ch_id' => 36,
                'content' => 'Lữ đoàn trưởng Lữ đoàn 6 hiện nay là ai?',
            ],
            [
                'ch_id' => 37,
                'content' => 'Tư lệnh Quân khu 9 hiện nay là ai?',
            ],
            [
                'ch_id' => 38,
                'content' => 'Chính ủy Quân khu 9 hiện nay là ai?',
            ],





            [
                'ch_id' => 41,
                'content' => 'Đồng chí hãy cho biết những nét truyền thống tiêu biểu của dân tộc Việt Nam là gì? ',
            ],
            [
                'ch_id' => 42,
                'content' => 'Đâu không phải là nét truyền thống tiêu biểu của dân tộc Việt Nam?',
            ],
            [
                'ch_id' => 43,
                'content' => '“Nhắm thẳng quân thù mà bắn” là câu nói nổi tiếng của anh hùng liệt sĩ nào?',
            ],
            [
                'ch_id' => 44,
                'content' => 'Nước ta được đổi tên thành nước Cộng hòa xã hội Chủ nghĩa Việt Nam vào ngày, tháng, năm nào?',
            ],
            [
                'ch_id' => 45,
                'content' => 'Ý nghĩa câu tục ngữ: “Thương người như thể thương thân” thể hiện nội dung truyền thống nào của dân tộc Việt Nam?',
            ],
            [
                'ch_id' => 46,
                'content' => 'Điền từ còn thiếu vào nội dung sau: “Lòng yêu nước của dân tộc ta được hình thành từ rất sớm và có nguồn gốc sâu xa từ ý thức cộng đồng gắn kết cá nhân – gia đình – làng xã - ...”?',
            ],
            [
                'ch_id' => 47,
                'content' => 'Đồng chí cho biết chức năng của QĐNDVN?',
            ],
            [
                'ch_id' => 48,
                'content' => 'Quân đội nhân dân Việt Nam được thành lập vào ngày, tháng, năm nào? Ở đâu?',
            ],
            [
                'ch_id' => 49,
                'content' => 'Chức năng của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 50,
                'content' => 'Truyền thống tiêu biểu của Quân đội nhân dân Việt Nam có bao nhiêu nội dung?',
            ],
            [
                'ch_id' => 51,
                'content' => 'Đâu không phải nội dung truyền thống tiêu biểu của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 52,
                'content' => 'Chỉ thi số 855-CT/QUTW ngày 12/8/2019 của Thường vụ Quân ủy Trung ương bao gồm mấy chuẩn mực cơ bản?',
            ],
            [
                'ch_id' => 53,
                'content' => 'Đâu là tiền thân của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 54,
                'content' => 'Đảng Cộng sản Việt Nam ra đời vào ngày, tháng, năm nào?',
            ],
            [
                'ch_id' => 55,
                'content' => 'Đảng Cộng sản Việt Nam ra đời trên cơ sở hợp nhất ba tổ chức Cộng sản nào?',
            ],
            [
                'ch_id' => 56,
                'content' => 'Quân đội nhân dân Việt Nam do ai sáng lập, lãnh đạo và rèn luyện?',
            ], [
                'ch_id' => 57,
                'content' => 'Điền từ còn thiếu vào nội dung sau: “Sự lãnh đạo, giáo dục, rèn luyện của Đảng Cộng sản Việt Nam và Chủ tịch Hồ Chí Minh là nhân tố quyết định ... tổ chức, xây dựng và mọi hoạt động của quân đội.”',
            ],
            [
                'ch_id' => 58,
                'content' => 'Chiến thắng đầu tiên của Quân đội nhân dân Việt Nam là trận đánh nào?',
            ],
            [
                'ch_id' => 59,
                'content' => 'Quân đội nhân dân Việt Nam được Nhà nước tặng thưởng Huân chương Sao vàng bao nhiêu lần?',
            ],
            [
                'ch_id' => 60,
                'content' => 'Nội dung giữ vững và tăng cường sự lãnh đạo của Đảng đối với Quân đội nhân dân Việt Nam bao gồm mấy nội dung?',
            ],
            [
                'ch_id' => 61,
                'content' => 'Nội dung giữ vững và tăng cường sự lãnh đạo của Đảng đối với Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 62,
                'content' => 'Quân đội nhân dân Việt Nam mang bản chất giai cấp nào?',
            ],
            [
                'ch_id' => 63,
                'content' => 'Mục tiêu, lý tưởng chiến đấu của quân đội ta?',
            ],
            [
                'ch_id' => 64,
                'content' => 'Quân đội nhân dân Việt Nam có bao nhiêu chức năng, nhiệm vụ?',
            ],
            [
                'ch_id' => 65,
                'content' => 'Chức năng nào là chức năng cơ bản, quan trọng nhất của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 66,
                'content' => 'Chức năng nào là chức năng cơ bản, quan trọng thuộc về bản chất, truyền thống của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 67,
                'content' => 'Chức năng nào là chức năng có ý nghĩa thực tiễn sâu sắc, thuộc về bản chất, truyền thống tốt đẹp của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 68,
                'content' => 'Quân đội nhân dân Việt Nam có bao nhiêu nhiệm vụ?',
            ],
            [
                'ch_id' => 69,
                'content' => 'Nhiệm vụ nào là nhiệm vụ chính trị hàng đầu, có ý nghĩa quyết định trực tiếp đến việc thực hiện chức năng chiến đấu của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 70,
                'content' => 'Nhiệm vụ nào là nhiệm vụ trọng tâm, thường xuyên, quyết định trực tiếp đến nâng cao trình độ sẵn sàng chiến đấu của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 71,
                'content' => 'Nhiệm vụ nào là nhiệm vụ quan trọng phản ánh quy luật bảo vệ Tổ quốc phải đi đôi với xây dựng đất nước của Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 72,
                'content' => 'Có mấy nhóm đối tượng tác chiến của Quân đội nhân dân Việt Nam? ',
            ],
            [
                'ch_id' => 73,
                'content' => 'Có bao nhiêu quan điểm trong huấn luyện là gì?',
            ],
            [
                'ch_id' => 74,
                'content' => 'Có bao nhiêu tiêu chuẩn đơn vị vững mạnh toàn diện',
            ],
            [
                'ch_id' => 75,
                'content' => 'Phương châm trong huấn luyện là gì?',
            ],
            [
                'ch_id' => 76,
                'content' => 'Nội dung biểu hiện đoàn kết nội bộ quân đội',
            ],
            [
                'ch_id' => 77,
                'content' => 'Nội dung biểu hiện đoàn kết nội bộ quân dân',
            ],
            [
                'ch_id' => 78,
                'content' => 'Nội dung biểu hiện đoàn kết nội bộ quân dân',
            ],
            [
                'ch_id' => 79,
                'content' => 'Phương châm “4 cùng” trong công tác dân vận?',
            ],
            [
                'ch_id' => 80,
                'content' => 'Lời chỉ dạy của Chủ tịch Hồ Chí Minh: “Quan sơn muôn dặm một nhà, bốn phương vô sản đều là anh em”, thể hiện nội dung nào sau đây?',
            ],
            [
                'ch_id' => 81,
                'content' => 'Điền từ còn thiếu trong nội dung sau: “Những người phụ trách ... cần phải óc nghĩ, mắt trông, tai nghe, chân đi, miệng nói tay làm. Chứ không phải chỉ nói suông, chỉ ngồi viết mệnh lệnh”?',
            ],
            [
                'ch_id' => 82,
                'content' => 'Điền từ còn thiếu trong nội dung sau: “Dân chủ trong Quân đội nhân dân Việt Nam là một bộ phận của dân chủ xã hội chủ nghĩa, thể hiện ... của mọi quân nhân trên các lĩnh vực chính trị, quân sự, kinh tế, văn hóa - tinh thần, được Hiến pháp, pháp luật của Nhà nước và điều lệnh, điều lệ của quân đội bảo đảm.”',
            ],
            [
                'ch_id' => 83,
                'content' => 'Bản chất của dân chủ trong quân đội ta mang bản chất dân chủ của...?',
            ],
            [
                'ch_id' => 84,
                'content' => 'Nội dung dân chủ trong Quân đội nhân dân Việt Nam được biểu hiện trên những vấn đề cơ bản sau?',
            ],
            [
                'ch_id' => 85,
                'content' => 'Bản chất kỷ luật của quân đội ta mang bản chất kỷ luật của...?',
            ],
            [
                'ch_id' => 86,
                'content' => 'Biểu hiện bản chất kỷ luật trong Quân đội nhân dân Việt Nam?',
            ],
            [
                'ch_id' => 87,
                'content' => '“Quân đội mạnh là nhờ giáo dục khéo, nhờ chính sách đúng và nhờ...”',
            ],
            [
                'ch_id' => 88,
                'content' => 'Nội dung thể hiện quyền dân chủ của quân nhân?',
            ],
            [
                'ch_id' => 89,
                'content' => 'Tên gọi của Cuộc vận động 50?',
            ],
            [
                'ch_id' => 90,
                'content' => 'Cuộc vận động “Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm và an toàn giao thông” ban hành vào ngày, tháng, năm nào?',
            ],
            [
                'ch_id' => 91,
                'content' => 'Cuộc vận động “Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm và an toàn giao thông” bao gồm mấy mục tiêu chính?',
            ],
            [
                'ch_id' => 92,
                'content' => 'Nội dung nào dưới đây thể hiện mục tiêu của Cuộc vận động “Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm và an toàn giao thông”?',
            ],
            [
                'ch_id' => 93,
                'content' => 'Điền từ còn thiếu vào nội dung sau: “Tăng gia sản xuất là một trong những nhiệm vụ trọng tâm, thuộc chức năng ... của quân đội ta”',
            ],
        ]);
    }
}
