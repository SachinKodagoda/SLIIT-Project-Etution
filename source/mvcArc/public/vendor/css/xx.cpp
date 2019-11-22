#include<iostream>
#include<string>
using namespace std;

class User{
protected:
    string name;
    string email;
    string address;
    string telephone;
    string password;
public:
    User()
    User(string uname, string uemail, string uaddress, string utelephone, string upassword){
        name = uname;
        email = uemail;
        address = uaddress;
        telephone = utelephone;
        password = upassword;
    }

};

class Lecturer : public User{
private:
    string subject;
    VideoTutorial *video[2];
    PrivateSession *pp;
public:
    Lecturer(){}
    Lecturer(string uname, string uemail, string uaddress, string utelephone, string upassword,string sub):
            User(uname,uemail,uaddress,utelephone,upassword)
        {
            subject = sub;
        }
    string getName(){
        return uname;
    }
    void addVideo(VideoTutorial *v1,VideoTutorial *v2){
        video[0] = v1;
        video[2] = v2;
    }
    void addSessionl(PrivateSession *ps){
        pp = ps;
    }

};

class Student : public User{
private:
    int Noreservation;
    Reservation *reser[5];
    PrivateSession *p;
public:
    Student(){}
    Student(string uname, string uemail, string uaddress, string utelephone, string upassword,):
            User(uname,uemail,uaddress,utelephone,upassword){
                Noreservation = 0;
            }
    void addReservation(Reservation *re){
        reser[Noreservation] = re;
        Noreservation ++;
    }
    void addSessions(PrivateSession *pc){
        p = pc;
    }

};

class Reservation{
private:
    int reservationId;
    string subject;
    string timeduration;
    Student *stu;
    Payment *pa;
    string lecturerName;
public:
    Reservation(int rid,string rsub,string rtime,Student *rstu,int pamount,string cType,int ccvv,
                string cardnumb)
        {
        reservationId = rid;
        subject = rsub;
        timeduration = rtime;
        stu = rstu;
        stu->addReservation(this);
        pa = new Payment(pamount,cType,ccvv,cardnumb);
        }
    void addLecturer(Lecturer *l){
        lecturerName = l->getName();
    }


};

class Payment{
private:
    int amount;
    string cardType;
    string cardnumber;
public:    int CVV;

    Payment(){};
    Payment(int pamount,string cType,int ccvv,string cnum){
        amount = pamount;
        cardType = cType;
        CVV = ccvv;
        cardnumber = cnum;
    }

};

class VideoTutorial(){
private:
    string videoName;
    string videoDescription;
    string subject;
public:
    VideoTutorial(string vname,string vdescription,string vsub){
        videoName = vname;
        videoDescription = vdescription;
        subject = vsub;
    }

};

class PrivateSession{
private:
    int sessionId;
    string status;
    Lecturer *le;
    Student *st;
public:
    PrivateSession(int sid,string st,Lecturer *lecc,Student *stud){
        sessionId = sid;
        status = st;
        le = lecc;
        st = stud;
    }

};


int main()
{
    cout << "Hello world!" << endl;
    return 0;
}