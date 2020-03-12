<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Log\Logger;

class Nonce extends Controller {

    public function check_nonce($nim, $problem, $nonce) {

        $data = array(
            "1301184218"    =>  array(
                                    'nama' => "DIMAS RIZQI GUINTANA",
                                    'hash_1' => '0f4e55d695368bcccec21d5cd3e4d60d760d5cf5dc341027ffc68369173170f3',
                                    'hash_2' => '48219fcd06ddf9f0e9700681f22fe1a167c7b5c49da0b1d5fac57181b507eeae',
                                    'hash_3' => '9a4e8daefec3bd92cbb2ad42ba7a42262bd73f2a353eeddd9e32081b2eacd982',                      
                                ),
            "1301194204"    =>  array(
                                    'nama' => "Mar'i Fauzan Rambe",
                                    'hash_1' => 'dcf844bc67e469f4a6aac443ebf08677ed895f822444a5dd89bb671a85a30145',                                   
                                    'hash_2' => '4a0e57e33983233bfe1eaf976634f63a5399ef6a01c84c1fbd3c868a33229143', 
                                    'hash_3' => 'c6ee9d206d341127e6d7634f10aa0075c5ba23195926804ea7b5e0b3eb8d3d1f',                                   
                                ),
            "1301180179"    =>  array(
                                    'nama' => "I Kadek Andrean Pramana Putra",
                                    'hash_1' => 'f49de2c846523b03dc8fe5919b61810559e5025a52d2653b7b0dac7353a42039',                                    
                                    'hash_2' => 'b0e6fd548b53946729a2b4e759fc033a9009af494b6253e3d515b1237d68beff',   
                                    'hash_3' => 'd4104d15a3f474c39c8c13613c99af5a542ae77ab63c94a30aa2e37c02ebb906',                                 
                                ),
            '1301180063'    =>  array(
                                    'nama' => 'Julizar Wiranto',
                                    'hash_1' => 'ddb9ba75c47d64a7d3473e78de914a357fc742f8d68b8f011b88b6178b6167ec',                                   
                                    'hash_2' => 'a622a4f26566323f9a210f525e7f65ba8c2e44211e1034c8944f217dfbaac8c0',       
                                    'hash_3' => '63cd88465d6c2cd9ee6ff24363f8388265bb65043af69e58a421cd95c8b8216f',                            
                                ),
            '1301194035'    =>  array(
                                    'nama' => 'Kadek Rizky Fransisca Putra',
                                    'hash_1' => '128fd6ffec3ca3b2096a629e3da17c3c49f6750d51d5f5e22687da4fe091af05',                                  
                                    'hash_2' => 'd0d7b1a59db77fee2528cdf557dfa8a8f89633569ed4d44c6edba661687f30ed',      
                                    'hash_3' => 'bcd72b010e385eb5efa5ebd4f12d74268391697c24c9efe7a27c32444d700183',                              
                                ),
            '1301180081'    =>  array(
                                    'nama' => 'Rivan Nur Ihsan',
                                    'hash_1' => 'a1a9e1477ea6e48a2e1f8b3bb59044f1882d033345755aeff3732996f9a456d1',                                   
                                    'hash_2' => '12be29569c84abe942d6b8eaba8aae53af3650774ff137ae84b4031129ecd184',      
                                    'hash_3' => 'dec1168a99a6dc9cdac70e9b54ed748fd16f29cd2268d10caee611539c451779',                              
                                ),
            '1101194083'    =>  array(
                                    'nama' => 'Richard Jabarul Akbar',
                                    'hash_1' => 'ceb6b037322bc31272ea6cd6768fb3cfdfdfd93107c23dbaae6aa1bfe9bc0af4',                                   
                                    'hash_2' => 'd7d877f1392c9e00b93993a7205b52fed28756066350153f7205e62ef1b4e010',      
                                    'hash_3' => '859eca41e3c3fabfb1a47493aeed2432bfd1e3ef6980a3ac8384e168cbf63a46',                             
                                ),
            '1301194242'    =>  array(
                                    'nama' => 'MUHAMMAD KHIYARUS SYIAM',
                                    'hash_1' => '90b522ef9e18f19e2c72b0f52438021595ca55bf392b62ac1f45b4de4cd33716',                                  
                                    'hash_2' => '15a33e951e5995c3e3d5801208e192cb04a2f77041cec920fd49803ede77c3d5',     
                                    'hash_3' => 'f244c5baba26de03af9ba0dde62c463a5d31178b09c78f3e1053509338354c07',                             
                                ),
            '1301180235'    =>  array(
                                    'nama' => 'Daffa Syifa Pratama',
                                    'hash_1' => 'd3a10b740b798217ddb293cd276b2ef653c86394a382c3cee59c24e2b592e140',                                 
                                    'hash_2' => '29a782fcd6a77af6deb1d093ce3269d303614063f9999d9a071108b8650515b3',     
                                    'hash_3' => '5127580386cf44618d55b2c70b5033d1f166efef3b7eb278928c79473fbe3b59',                             
                                ),
            '1301190369'    =>  array(
                                    'nama' => 'Daffa Barin Tizard Riyadi',
                                    'hash_1' => '1bdfd57a187ec2b80c9e50908f2483cd36f0d2453e697f762c0de76de0e560a8',                                  
                                    'hash_2' => '4959f73ec3fae0fc6a96e0929ef6d6210fd40f25a0a77cd60a5d7b26e8dafda4',    
                                    'hash_3' => 'a7b305c8acc1ae3189bcde6f839d846db7192ca58eac99a34be9933a89dd19b1',                              
                                ),
            '1301184378'    =>  array(
                                    'nama' => 'Annisa Miranda',
                                    'hash_1' => '5064c042285df985d7c655f4e2e923d377c43a75d7409e9d93a7e1e52d901262',                                  
                                    'hash_2' => '07f9d385158b65d896389127d287fc82036587ee327e71beb9f6333e82c1861e',    
                                    'hash_3' => 'dbb8d52dafb4a214965e87a4bf51161b57c7fbab2855027e4f15613523e529e6',                              
                                ),
            '1301184423'    =>  array(
                                    'nama' => 'Diya namira purba',
                                    'hash_1' => '2e43185e4db6e94d7325df834d9c6a448be03e5eb2261008a4a8be7d61af2cc8',                                
                                    'hash_2' => '009afcca496090d5e2447e21480d740a44d2fd8cfd775b0723d34988a43c4e1c',      
                                    'hash_3' => '02c09ad7aea819c7873bc634d5d07202b37bf01948948cfc9de7dfee5df850f8',                           
                                ),
            '1301198509'    =>  array(
                                    'nama' => 'A. Nurul Istiqamah',
                                    'hash_1' => 'eba20a8643eda098cc576682d76c0f7e6a56d9d15365a04074738cb9864a73f2',                               
                                    'hash_2' => '7cd1d1721d0121f7d5186885459e64de4f82906ca639887bbd55ab0c39186d84',   
                                    'hash_3' => '188eaa3ff4c20fd304311471f50f609390b87df72c1a1a8730a233c0a61952a1',                               
                                ),
            '1301184143'    =>  array(
                                    'nama' => 'Prisla Novia Anggreyani',
                                    'hash_1' => 'eb99b085cb1750404c9d728755d45f2096f1e1beba0f2d2f8e0156bcd7bad6eb',                               
                                    'hash_2' => 'a4f9079d0a4b9e4c626a9660ea8d02a0c0cbf49d3b90084e865c725adfd9673e',    
                                    'hash_3' => '4671711048ee9fe35cd8c8a4bf67c12845808b7a6d51bbd909eaa841783aa02d',                            
                                ),
            '1301184402'    =>  array(
                                    'nama' => 'MUHAMMAD RIDHO SAPUTRA',
                                    'hash_1' => 'f8f521e6f56cb2fc544a2c70009b6ae155c75f417712c74e0911800699602e9d',                            
                                    'hash_2' => '22f890ff160f21661b42c98197beb7e9e66570bd15ac30efc40a48d8441834de',   
                                    'hash_3' => '577fee35e59f70b9917d6c9563cb681d33b063b9782e5fd80b7349297cde8d53',                        
                                ),
            '1301180307'    =>  array(
                                    'nama' => 'Samuel Erlangga Siagian',
                                    'hash_1' => 'a7df38aa58e953d82b4883aec478c736ff889e17557c2109a42c5dc673e23170',                            
                                    'hash_2' => '43b2d6a8f051f9340d1cd0deb422730462bb19d6999658f7333695ac2d2da977',    
                                    'hash_3' => 'a74bfdb18cc437acae5d4a52dc861643bf1a1b4e8ee1ca67a1a4fef54315e3b6',                       
                                ),
            '1301190061'    =>  array(
                                    'nama' => 'I GDE BAGUS JANARDANA ABASAN',
                                    'hash_1' => 'ebb6a95e9f04230dec346553e9c0e10bdc5e700c46bd2a05aa31c8192cb8c422',                         
                                    'hash_2' => '7ec3646b7438861734b7ce82dadbc286f96099c42c7e91eba9a5f7985a71dbfd',   
                                    'hash_3' => '26f016adf9c6002b2abd901cc1621a38bf82feadf92a4568e04e94afbf09b9b2',                                
                                ),
            '1301194376'    =>  array(
                                    'nama' => 'Raihan Romzi Rakhman',
                                    'hash_1' => '2086d744a8fc8901f30c82e61356ff1605612ffa5abe3247d85af1976c9f14a2',                               
                                    'hash_2' => 'cf1c1d4a4198e15ecd47b4c10497ce56e130c72b94c1aa6682c9de337f44db15',  
                                    'hash_3' => '933fe2f7c0f71b472344311b1f665849059955735c8738803cde82e1784d66a7',                            
                                ),
            '1301184046'    =>  array(
                                    'nama' => 'Intan Ramadhani',
                                    'hash_1' => '18d2fe004b422c782b3990dbb2ad80e6b1372208d8f68b76687c22f03f29a763',                                
                                    'hash_2' => '5589d77294fe8f6280fe41943923ea14194273d1e90fba8440aa8c88e7d8099b',  
                                    'hash_3' => 'b4b744ca1a41a8d134095ce8349bdb58cbe406cf209e20983aed5373da3d0bf5',                             
                                ),
        );

        if ($problem == 1) {
            $hash = $data[$nim]['hash_1'];
        } else if ($problem == 2) {
            $hash = $data[$nim]['hash_2'];
        } else if ($problem == 3) {
            $hash = $data[$nim]['hash_3'];
        }
        
        $combine = $hash.$nonce;

        if ($problem == 1) {
            if (substr(hash('sha256', $combine),0,1) == '0') {
                return 'True';
            } else {    
                return 'False';
            }
        } else if ($problem == 2) {
            if (substr(hash('sha256', $combine),0,2) == '00') {
                return 'True';
            } else {    
                return 'False';
            }
        } else if ($problem == 3) {
            if (substr(hash('sha256', $combine),0,3) == '000') {
                return 'True';
            } else {    
                return 'False';
            }
        }
    }
}