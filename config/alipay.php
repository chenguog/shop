<?php
 return [
		//应用ID,您的APPID。
		'app_id' => "2016092500595520",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAxXoOaQvxs7awwlFT4ZBUeafS0a7dbymUYlP4R7zOh06l4IasL8w/HJN5ck9n+vLzssjMCNP0n9s8ybpeYysvMLUmMV/zn6/srqeRWTu4vZ2jZ8oNqDWM9RbzLsXGFK6KG16/IresW4bNNxJVLp81Qpb1HgDWhGo4FPTlEj+zQkhfDaRTBw9PAEL374QwejdOKCShRpMsAV8KspkVuq88ZHT5sGofCyETcwYlsUWXOosWOvfD/Hgw9QGaHL5uzdrI07KwQjaYnWJfpmrQmRM1HLKAJyCXGfuklihm8caS7gY4HxWjxRM97OdHz9ml04OlZJwi3FZou7mM5JSXx0v7CwIDAQABAoIBADwIPec7RU//wr5f4OMacEPHe/RYd2J6vmwh4MFWKWbCxvR5nFCvg6QZRPs2HoMQZns8RaKNZLlP+avNpzH4h9ED0MeDxtkNryLtN+drm16xVGKR7xLqrJ45StY2M2BIKx3k8LAKLDBqy2npfdG9foBuybdEQ/JfJAti41xn1wPX2Ul1bM/x537/MEips5/bbXQLXJ0xvk7e8mxKd7YeL6l2bX9gR4gfuo/plV8AUI0SJq8bIB+qDQ69rfSBgY3XX2F6UO8AEILlyWjY43LQa/s0SUZr1/ErLI2NDGNoDQu8QbiW1duk6dnddpO8/LFTOMQ3lYoaRXx8SAiUbBWubpECgYEA8tac5mpymwfknd/y3gfxBXAFdsPV6JmYbKGBtbAigksdaFoNSMIAoZK/qokxorurcpwBRXHMOVouYZRBy2iM94ZnKYFFzTtgAp5cDqp3Ok0fSyUm+ayY2/4+UF0hBbKqrrp4P1ZkxSf4PaXK5d0aD5bwqWzzFcmxTqs7X1XFq5kCgYEA0C4NCTdjPAjVMWTms/4M6D1FNHL0oA4VURHWhhtOhoaWTKI927CqF6bWGJFiJlwETUTqjd+xx1uSDV6Q42T70n+1F6PmnHG4Zd0frS8aOnjP3P4bGJOSsKH3wsVDcK7e06OlrKp5Gf6SiyUKALuTaLV+1qLnaLPlKEdmZT+L4kMCgYAC8xBczBYwQ9xG/p1YjQgkZMPsOVyzwonTZ/LHXihNJNRqnA1lQNX5IGsrixcLPvRKJBLv4P32BF5j2QUjj1WG/B7spiFO6NW1sm6zzuY70wv6Qa1DgxEoOuJO35KzGwRvstwbCNWYf2/Ib+cS+6iBX/f0Vtps/VIl/nZuJgCMoQKBgQC+Dfy6uEUxTsMLmBmCo2G3OBCRJI2t/Y16eLWHszBKYl6e0dN1WGDAvQBiZ3/ak1EeFdeo9FrCLRg2emn+H3hDIXH7hheIJc35uRktK35feWITWCz2j+twtD2UJDFAk3U8c/9RlkR+9cllnMf4CUc3ZdLJMunezbVcw2p47r3PLwKBgAndpjnx6oBZzN9tNU3uR99mpIl+WfpFxJj9IF3ckqBgcOljVP5h7AE4c3WGLBQDeXBwmQVU8I5H4k1oZ2EJGoSazUoHjzQ9bV28qbjPFgaBrhG9nBDnWG7nzWEaHgvZ/CgApjQQ+W+NlzDrx8aVpDSP96lqdCxBKuGxztare80U",
		
		//异步通知地址
		'notify_url' => "http://wxshop.com/alipay/notify",
		
		//同步跳转
		'return_url' => "http://wxshop.com/alipay/return",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",
 
		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApju+qNjf+OlymFRkcMe1sHO5kOuaiPOfST6W5rum6WLpUyh3FmFj95AKkAbkfO1d68DE91q3q5Ab9xNhnrZ2/ZqfRCLl+judXBkfALIfyojsQ9dRneon5wzEHpQyn92Og0GLnbUF0+cxiOz9Y3Zi8FakeYp3AqJwDu8+bQJQ8xzSZM/Olg54HON4RImzpfvGCaH36EuBiqLNRlfTfQAtkQezc2QjjmHh6UlVV33xradnyg6X4CNJWIJLKZjP90USgp6GRO5QlAnIv6nzyJd2n4f2SNyhnBvp1p1T89dUq6IzEfSdb9PY5q9MoziTfZpdmBFQm7ogu+rqU/9VG5SubQIDAQAB",
		
	    //标识沙箱环境
        "mode"=>'dev'
];