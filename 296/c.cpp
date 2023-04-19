#include<bits/stdc++.h>
using namespace std;
int main(){
	int n,x;
	cin >> n >> x;
	vector<int>a(n);
	for(int i=0;i<n;i++)cin >> a[i];
	sort(a.begin(),a.end());
	int i=0;
	for(int j=0;j<n;j++){
		while(i<n&&a[i]-a[j]<x)i++;
		if(i<n&&a[i]-a[j]==x){
			cout << "Yes" << endl;
			return 0;
		}
	}
	cout << "No" << endl;
}