# dnmp
# 目錄
- [專案簡介](#專案簡介)
- [安裝說明](#安裝說明)
  - [環境需求](#環境需求)
  - [安裝步驟](#安裝步驟)
- [目錄結構](#目錄結構)
- [使用方式](#使用方式)
  - [啟動容器](#啟動容器)
  - [查看容器狀態](#查看容器狀態)
  - [測試服務](#測試服務)
  - [停止與重啟](#停止與重啟)
  - [查看日誌](#查看日誌)
- [參考資料](#參考資料)

  
# 專案簡介
此專案是基於Docker的Nginax, Mysql, PHP 環境專案，主要用於開發跟學習。

# 安裝說明
## 環境需求
- Docker 
- Docker Compose >= 2.0

## 安裝步驟
```
git clone https://github.com/heyIamYi/dnmp.git
cd dnmp
```

## 目錄結構
```
/
├── docker-compose.yml
├── mysql/
│   ├── data/
│   └── my.cnf
├── nginx/
│   ├── conf.d/
│   │   ├── example.conf  
│   │   └── laravel.conf  
│   └── logs/            
├── php/                
│   ├── extensions/      # PHP擴展目錄
│   └── Dockerfile       
├── redis/
│   └── data/
├── sites/
│   └── example/
│       └── index.php
└── README.md
```
# 使用方式
## 啟動容器
```
docker-compose up -d
```
## 查看容器狀態
```
docker-compose ps
```
## 測試服務
1. 瀏覽以下網址測試
   * 預設站點： `http：//localhost`
   * laravel站點： `http：//laravel.local`
   * 範例站點： `http://example.local`
2. 修改本機 `hosts`文件以支持多個站點
   ### Windows:
   * 打開文件路徑: `C:\Winwods\System32\drivers\etc\hosts
   * 使用記事本(管理員身分運行)開啟，添加以下內容：
     ```
     127.0.0.1 laravel.local
     127.0.0.1 example.local
     ```
## 停止與重啟
* 停止容器
```
docker-compose down
```
* 重啟特定容器
```
docker-compose restart nginx
```
## 查看日誌
```
docker-compose logs nginx
```


# 參考資料
* https://github.com/yeszao/dnmp
* https://github.com/xiaoyu98628/dnmp
