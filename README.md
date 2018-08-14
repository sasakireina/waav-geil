# waav-geil

## Flow
### 上から順に手順を追って実行していきましょう。
#### **開発前**

***1. Move to your project directory.***
```
[~]$ cd /Applications/MAMP/htdocs/waav-geil（このpath（/Applications/MAMP/htdocs/waav-geil）の部分は自分の環境に合わせて）
```

***2. Reflect the latest code.***
```
[/Applications/MAMP/htdocs/waav-geil:master]$ git pull origin master
```

#### 以下現在のディレクトリをcurrentに略。

***3. Start your branch from master branch.***
```
[current:master]$ git checkout -b feature/add_image (feature/add_imageはその場で適当に命名)
```

***4. Make an empty commit on your branch.***
```
[current:feature/add_image]$ git commit --allow-empty -m 'Create branch feature/add_image' (Create branch あなたの作ったbranch名(以下your_branchに略))
```

***5. Push your local app to an origin repository(=directory).***
```
[current:your_branch]$ git push origin feature/your_branch
```

***6. Create a pull request on github.***
- Pushした後こんな画面（ちょっと古い）になるのですが、ここで ***Compare & pull request*** を押下。
![pull-req](https://user-images.githubusercontent.com/31397009/44029103-1122f9c6-9f37-11e8-8917-3d01e98cd2a6.png) 

- こんな画面に遷移します（スタイルは指定してます）。baseがmaster、compareがyour_branchになっていることを確認して、諸々を記入し ***Create pull request*** を押下します。開発に入りましょうb
![pull-req-2](https://user-images.githubusercontent.com/31397009/44029224-761b9cfc-9f37-11e8-9e4a-6376c17371e7.jpg)

#### **開発中**

***7. Change your app as you like on your_branch.***
![top](https://user-images.githubusercontent.com/31397009/44029787-7e0188bc-9f39-11e8-9549-3b6c793cf902.png)

#### **開発後**

***8. Add files you modified.***
```
[current:your_branch]$ git add .
```

***9. Commit files you added with some messages.***
```
[current:your_branch]$ git commit -m 'Add some images'.（''内はその場で適当に）
```

***10. Push your local app to an origin repository.***
```
[current:your_branch]$ git push origin feature/your_branch
```

---

**Conflictが発生していてそのままmergeできないとき!!なければ手順11へ。**
![conflict](https://user-images.githubusercontent.com/31397009/44030937-4d931b42-9f3d-11e8-80f0-04b43970bb2e.png)

***1. At first, calm down.***

***2. Change your (local) branch to master branch.***
```
[current:your_branch]$ git checkout master
```

***3. Synchronize an origin master repository with your (local) master directory.***
```
[current:master]$ git pull origin master
```

***4. Change master branch to your (local) branch.***
```
[current:master]$ git checkout your_branch
```

***5. Open and edit the conflict file with an atom editor.***
![atom-conflict](https://user-images.githubusercontent.com/31397009/44031215-3c0f0420-9f3e-11e8-8234-e82f53742ef0.jpg)
- どちらかの ***Use me*** を押下、またはその場に応じて適当に編集してconflictを解消する。

***6. Add files you modified.***
```
[current:your_branch]$ git add .
```

***7. Commit files you added with some messages.***
```
[current:your_branch]$ git commit -m 'Resolve conflicts'.（''内はその場で適当に）
```

***8. Push your local app to an origin repository.***
```
[current:your_branch]$ git push origin feature/your_branch
```

***9. 手順11へ。***

---

***11. Merge origin your_branch into origin master branch and delete your_branch on github.***
- ***This branch is up-to-date with base branch*** のチェックマークを確認し、 ***Merge pull request*** 、続けて ***Confirm merge*** を押下。
![merge](https://user-images.githubusercontent.com/31397009/44030208-10a366d0-9f3b-11e8-8b9f-8ed15b1467cc.png)

- ***Delete branch*** を押下。
![delete](https://user-images.githubusercontent.com/31397009/44030411-a86b996a-9f3b-11e8-9900-e7b6978c275e.png)

***12. Change your (local) branch to master branch.***
```
[current:your_branch]$ git checkout master
```

***13. Synchronize an origin master repository with your (local) master directory.***
```
[current:master]$ git pull origin master
```

***14. Delete your (local) branch. (This is a final 
procedure, thx!)***
```
[current:master]$ git branch -D your_branch
```
