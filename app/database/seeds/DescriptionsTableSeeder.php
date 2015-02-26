<?php

class DescriptionsTableSeeder extends Seeder {

    public function run()
    {
        
        DB::statement("TRUNCATE TABLE outlet_descriptions");

        $desc = array(
            array(
                'full_description' => 'Sử dụng các loại mỹ phẩm và dược phẩm hoàn toàn từ thiên nhiên. Không gian spa sang trọng, hiện đại. Đội ngũ nhân viên chuyên nghiệp, thân thiện',
                'summary'      => 'Sử dụng các loại mỹ phẩm và dược phẩm hoàn toàn từ thiên nhiên. Không gian spa sang trọng, hiện đại. Đội ngũ nhân viên chuyên nghiệp, thân thiện',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'full_description' => 'Nổi tiếng với các dịch vụ chăm sóc da mặt, chăm sóc chuyên sâu với nuskin. Spa đem lại cho khách hàng những phút giây thư giãn tuyệt vời nhất. Nhân viên được đào tạo chuyên nghiệp',
                'summary'      => 'Nổi tiếng với các dịch vụ chăm sóc da mặt, chăm sóc chuyên sâu với nuskin. Spa đem lại cho khách hàng những phút giây thư giãn tuyệt vời nhất. Nhân viên được đào tạo chuyên nghiệp',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'full_description' => 'Không gian rộng rãi, sang trọng. Có nhiều dịch vụ làm đẹp, chăm sóc sức khỏe, đem lại giây phút thư giãn cho bạn. Phục vụ chu đáo, chuyên nghiệp',
                'summary'      => 'Không gian rộng rãi, sang trọng. Có nhiều dịch vụ làm đẹp, chăm sóc sức khỏe, đem lại giây phút thư giãn cho bạn. Phục vụ chu đáo, chuyên nghiệp',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            
        );

        DB::table('outlet_descriptions')->insert( $desc );
    }

}
