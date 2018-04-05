```shell
curl -XPUT 'localhost:9200/blog/posts/1?pretty' -H 'Content-Type: application/json' -d'
{
    "title": "php 1",
    "body": "php 111"
}'

curl -XPUT 'localhost:9200/blog/posts/2?pretty' -H 'Content-Type: application/json' -d'
{
    "title": "php 2",
    "body": "php 222"
}'

curl -XPUT 'localhost:9200/blog/posts/3?pretty' -H 'Content-Type: application/json' -d'
{
    "title": "php 3",
    "body": "php 333"
}'

curl -XPUT 'localhost:9200/blog/posts/4?pretty' -H 'Content-Type: application/json' -d'
{
    "title": "java 4",
    "body": "java 444"
}'

curl -XPUT 'localhost:9200/blog/posts/5?pretty' -H 'Content-Type: application/json' -d'
{
    "title": "java 5",
    "body": "java 555"
}'

curl -XPUT 'localhost:9200/blog/posts/6?pretty' -H 'Content-Type: application/json' -d'
{
    "title": "java 6",
    "body": "java 666"
}'

```